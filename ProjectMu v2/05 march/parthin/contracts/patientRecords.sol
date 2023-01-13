pragma solidity >=0.4.21 <0.7.0;

contract patientRecords{
    
    struct Record{
        uint patientID;
        uint doctorID;
        uint hospitalID;
        uint blockId;
    }
    uint public blockNo;
     
    mapping(uint => Record) public allpatientrecords;
    
    event votedEvent(
        uint indexed _patientID
        );
    constructor () public {
    	addPatient(100001,12,1);
    }

   
       
    function addPatient(uint _patientID, uint _doctorID,uint _hospitalID) public {
        blockNo++;
        allpatientrecords[blockNo] = Record(_patientID, _doctorID, _hospitalID, blockNo);
    }
}