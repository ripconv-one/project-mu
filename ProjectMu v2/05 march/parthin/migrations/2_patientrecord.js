var patientRecords= artifacts.require("./patientRecords.sol");

module.exports = function(deployer) {
  deployer.deploy(patientRecords);
};
