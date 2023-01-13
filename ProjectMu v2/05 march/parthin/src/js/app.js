App = {
  web3Provider: null,
  contracts: {},
  account: '0x0',
  hasVoted: false,
  result: null,

  init: function() {
    return App.initWeb3();
  },

  initWeb3: function() {
    // TODO: refactor conditional
    if (typeof web3 !== 'undefined') {
      // If a web3 instance is already provided by Meta Mask.
      App.web3Provider = web3.currentProvider;
      web3 = new Web3(web3.currentProvider);
    } else {
      // Specify default instance if no web3 instance provided
      App.web3Provider = new Web3.providers.HttpProvider('http://localhost:7545');
      web3 = new Web3(App.web3Provider);
    }
    return App.initContract();
  },

  initContract: function() {
    $.getJSON("patientRecords.json", function(patientRecords) {
      // Instantiate a new truffle contract from the artifact
      App.contracts.patientRecords = TruffleContract(patientRecords);
      // Connect provider to interact with contract
      App.contracts.patientRecords.setProvider(App.web3Provider);

      //App.listenForEvents();

      return App.render();
    });
  },

  // Listen for events emitted from the contract
  listenForEvents: function() {
    App.contracts.patientRecords.deployed().then(function(instance) {
      // Restart Chrome if you are unable to receive this event
      // This is a known issue with Metamask
      // https://github.com/MetaMask/metamask-extension/issues/2393
      //instance.votedEvent({}, {
       //fromBlock: 0,
      //toBlock: 'latest'
      //}).watch(function(error, event) {
        //console.log("event triggered", event)
        // Reload when a new vote is recorded
        App.render();
      
    });
  },

  render: function() {
    var precords;
    var loader = $("#loader");
    var content = $("#content");

    loader.show();
    content.hide();


    // Load account data
    web3.eth.getCoinbase(function(err, account) {
      if (err === null) {
        App.account = account;
        //console.log(account)
        $("#accountAddress").html("Your Account: " + account);
      }
    });

    // Load contract data
    App.contracts.patientRecords.deployed().then(function(instance) {
      precords = instance;
      return precords.blockNo();
    }).then(function(blockNo) {
      var candidatesResults = $("#candidatesResults");
      candidatesResults.empty();

      var candidatesSelect = $('#candidatesSelect');
      candidatesSelect.empty();

      for (var i = 1; i <= blockNo; i++) {
        precords.allpatientrecords(i).then(function(record) {
          var pid = record[0];
          var docid = record[1];
          var hospid = record[2];
          var bNo = record[3];

          // Render candidate Result
          var candidateTemplate = "<tr><th>" + pid + "</th><td>" + docid+ "</td><td>" + hospid + "</td><td>" + bNo + "</td></tr>"
          candidatesResults.append(candidateTemplate);

          // Render candidate ballot option
          var candidateOption = "<option value='" + pid + "' >" + docid + "</ option>"
          candidatesSelect.append(candidateOption);
        });
      }
      //return precords.allpatientrecords(App.account);
    }).then(function(c) {
      // Do not allow a user to vote
      //if(hasVoted) {
        //$('form').hide();
      
     // }
      loader.hide();
      content.show();
    }).catch(function(error) {
      console.warn(error);
    });
  },

  addPatient: function() {
    var patid = $('#pid').val();
    var docid = $('#did').val();
    var hospid = $('#hid').val();
    App.contracts.patientRecords.deployed().then(function(instance) {
      return instance.addPatient(patid,docid,hospid, { from: App.account });
    }).then(function(result) {
      // Wait for votes to update
      App.result = result;
            console.log(result);
            $("#hash").html("Your Account: " + result);
            App.conmysql();
      $("#content").hide();
      $("#loader").show();
      setTimeout("location.reload(true);1000");
    }).catch(function(err) {
      console.error(err);
    });
  },
  conmysql: function() {
	const mysql = require('mysql');

// First you need to create a connection to the database
// Be sure to replace 'user' and 'password' with the correct values
const con = mysql.createConnection({
  host: 'localhost',
  user: 'root',
  password: 'root123',
});

con.connect((err) => {
  if(err){
    console.log('Error connecting to Db');
    return;
  }
  console.log('Connection established');
});

con.end((err) => {
  // The connection is terminated gracefully
  // Ensures all remaining queries are executed
  // Then sends a quit packet to the MySQL server.
});
}
};

$(function() {
  $(window).load(function() {
    App.init();
  });
});

