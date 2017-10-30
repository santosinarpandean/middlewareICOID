<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Faker\Provider\File;
use Storage;
use Symfony\Component\Console\Input\ArrayInput;
use Validator;

class APIController extends Controller
{
    //
    protected $address;
    public function createContract(){
        ini_set('max_execution_time',-1);
        try {
//            // fortesting
//            return json_encode(['error'=> 0,'returns'=>['abi'=> json_decode('[
//    {
//      "constant": true,
//      "inputs": [],
//      "name": "name",
//      "outputs": [
//        {
//          "name": "",
//          "type": "string"
//        }
//      ],
//      "payable": false,
//      "type": "function"
//    },
//    {
//      "constant": false,
//      "inputs": [
//        {
//          "name": "_spender",
//          "type": "address"
//        },
//        {
//          "name": "_value",
//          "type": "uint256"
//        }
//      ],
//      "name": "approve",
//      "outputs": [
//        {
//          "name": "success",
//          "type": "bool"
//        }
//      ],
//      "payable": false,
//      "type": "function"
//    },
//    {
//      "constant": true,
//      "inputs": [],
//      "name": "totalSupply",
//      "outputs": [
//        {
//          "name": "",
//          "type": "uint256"
//        }
//      ],
//      "payable": false,
//      "type": "function"
//    },
//    {
//      "constant": false,
//      "inputs": [
//        {
//          "name": "_from",
//          "type": "address"
//        },
//        {
//          "name": "_to",
//          "type": "address"
//        },
//        {
//          "name": "_value",
//          "type": "uint256"
//        }
//      ],
//      "name": "transferFrom",
//      "outputs": [
//        {
//          "name": "success",
//          "type": "bool"
//        }
//      ],
//      "payable": false,
//      "type": "function"
//    },
//    {
//      "constant": true,
//      "inputs": [],
//      "name": "decimals",
//      "outputs": [
//        {
//          "name": "",
//          "type": "uint8"
//        }
//      ],
//      "payable": false,
//      "type": "function"
//    },
//    {
//      "constant": true,
//      "inputs": [],
//      "name": "version",
//      "outputs": [
//        {
//          "name": "",
//          "type": "string"
//        }
//      ],
//      "payable": false,
//      "type": "function"
//    },
//    {
//      "constant": true,
//      "inputs": [
//        {
//          "name": "_owner",
//          "type": "address"
//        }
//      ],
//      "name": "balanceOf",
//      "outputs": [
//        {
//          "name": "balance",
//          "type": "uint256"
//        }
//      ],
//      "payable": false,
//      "type": "function"
//    },
//    {
//      "constant": true,
//      "inputs": [],
//      "name": "symbol",
//      "outputs": [
//        {
//          "name": "",
//          "type": "string"
//        }
//      ],
//      "payable": false,
//      "type": "function"
//    },
//    {
//      "constant": false,
//      "inputs": [
//        {
//          "name": "_to",
//          "type": "address"
//        },
//        {
//          "name": "_value",
//          "type": "uint256"
//        }
//      ],
//      "name": "transfer",
//      "outputs": [
//        {
//          "name": "success",
//          "type": "bool"
//        }
//      ],
//      "payable": false,
//      "type": "function"
//    },
//    {
//      "constant": false,
//      "inputs": [
//        {
//          "name": "_spender",
//          "type": "address"
//        },
//        {
//          "name": "_value",
//          "type": "uint256"
//        },
//        {
//          "name": "_extraData",
//          "type": "bytes"
//        }
//      ],
//      "name": "approveAndCall",
//      "outputs": [
//        {
//          "name": "success",
//          "type": "bool"
//        }
//      ],
//      "payable": false,
//      "type": "function"
//    },
//    {
//      "constant": true,
//      "inputs": [
//        {
//          "name": "_owner",
//          "type": "address"
//        },
//        {
//          "name": "_spender",
//          "type": "address"
//        }
//      ],
//      "name": "allowance",
//      "outputs": [
//        {
//          "name": "remaining",
//          "type": "uint256"
//        }
//      ],
//      "payable": false,
//      "type": "function"
//    },
//    {
//      "inputs": [
//        {
//          "name": "ownerBalance",
//          "type": "uint256"
//        },
//        {
//          "name": "tokenTotalSupply",
//          "type": "uint256"
//        },
//        {
//          "name": "tokenName",
//          "type": "string"
//        },
//        {
//          "name": "tokenDecimals",
//          "type": "uint8"
//        },
//        {
//          "name": "tokenSymbol",
//          "type": "string"
//        }
//      ],
//      "payable": false,
//      "type": "constructor"
//    },
//    {
//      "payable": false,
//      "type": "fallback"
//    },
//    {
//      "anonymous": false,
//      "inputs": [
//        {
//          "indexed": true,
//          "name": "_from",
//          "type": "address"
//        },
//        {
//          "indexed": true,
//          "name": "_to",
//          "type": "address"
//        },
//        {
//          "indexed": false,
//          "name": "_value",
//          "type": "uint256"
//        }
//      ],
//      "name": "Transfer",
//      "type": "event"
//    },
//    {
//      "anonymous": false,
//      "inputs": [
//        {
//          "indexed": true,
//          "name": "_owner",
//          "type": "address"
//        },
//        {
//          "indexed": true,
//          "name": "_spender",
//          "type": "address"
//        },
//        {
//          "indexed": false,
//          "name": "_value",
//          "type": "uint256"
//        }
//      ],
//      "name": "Approval",
//      "type": "event"
//    }
//  ]'),
//                'contract_name'         => 'ALGO',
//                'contract_address'      => '0xdfab4349aa9e6be7973ca502a36cc7aae79ae07e',
//            ]]);

            $input = input::all();
//            return json_encode(["est"=>"est"]);
//            return json_encode(['name'=>$input['tokenName']]);

            $contractName           = $input['tokenName'];
            $ownerBalance           = $input['ownerBalance'];
            $tokenTotalSupply       = $input['tokenTotalSupply'];
            $tokenName              = $input['tokenName'];
            $tokenDecimals          = $input['tokenDecimals'];
            $tokenSymbol            = $input['tokenSymbol'];

//        $process = new Process('cd /var/www/html/icoID');
//        $process = new Process("mkdir $contractName");
            $process = new Process("cd /var/www/html/middlewareICOID/storage/app/public/icoID && mkdir -m 777 $contractName && cd $contractName && truffle init");
            $process->run();
            // executes after the command finishes
            if (!$process->isSuccessful()) {
                //if command failed
                throw new ProcessFailedException($process);
            }

            //put contract's file in folder
            //file name
            $path       = "/var/www/html/icoID";
            $file_name  = $path.'/'.$contractName.'.sol';
            $contents   = 'pragma solidity ^0.4.4;

contract Token {

    /// @return total amount of tokens
    function totalSupply() constant returns (uint256 supply) {}

    /// @param _owner The address from which the balance will be retrieved
    /// @return The balance
    function balanceOf(address _owner) constant returns (uint256 balance) {}

    /// @notice send `_value` token to `_to` from `msg.sender`
    /// @param _to The address of the recipient
    /// @param _value The amount of token to be transferred
    /// @return Whether the transfer was successful or not
    function transfer(address _to, uint256 _value) returns (bool success) {}

    /// @notice send `_value` token to `_to` from `_from` on the condition it is approved by `_from`
    /// @param _from The address of the sender
    /// @param _to The address of the recipient
    /// @param _value The amount of token to be transferred
    /// @return Whether the transfer was successful or not
    function transferFrom(address _from, address _to, uint256 _value) returns (bool success) {}

    /// @notice `msg.sender` approves `_addr` to spend `_value` tokens
    /// @param _spender The address of the account able to transfer the tokens
    /// @param _value The amount of wei to be approved for transfer
    /// @return Whether the approval was successful or not
    function approve(address _spender, uint256 _value) returns (bool success) {}

    /// @param _owner The address of the account owning tokens
    /// @param _spender The address of the account able to transfer the tokens
    /// @return Amount of remaining tokens allowed to spent
    function allowance(address _owner, address _spender) constant returns (uint256 remaining) {}

    event Transfer(address indexed _from, address indexed _to, uint256 _value);
    event Approval(address indexed _owner, address indexed _spender, uint256 _value);

}



contract StandardToken is Token {

    function transfer(address _to, uint256 _value) returns (bool success) {
        //Default assumes totalSupply can\'t be over max (2^256 - 1).
        //If your token leaves out totalSupply and can issue more tokens as time goes on, you need to check if it doesn\'t wrap.
        //Replace the if with this one instead.
        //if (balances[msg.sender] >= _value && balances[_to] + _value > balances[_to]) {
        if (balances[msg.sender] >= _value && _value > 0) {
            balances[msg.sender] -= _value;
            balances[_to] += _value;
            Transfer(msg.sender, _to, _value);
            return true;
        } else { return false; }
    }

    function transferFrom(address _from, address _to, uint256 _value) returns (bool success) {
        //same as above. Replace this line with the following if you want to protect against wrapping uints.
        //if (balances[_from] >= _value && allowed[_from][msg.sender] >= _value && balances[_to] + _value > balances[_to]) {
        if (balances[_from] >= _value && allowed[_from][msg.sender] >= _value && _value > 0) {
            balances[_to] += _value;
            balances[_from] -= _value;
            allowed[_from][msg.sender] -= _value;
            Transfer(_from, _to, _value);
            return true;
        } else { return false; }
    }

    function balanceOf(address _owner) constant returns (uint256 balance) {
        return balances[_owner];
    }

    function approve(address _spender, uint256 _value) returns (bool success) {
        allowed[msg.sender][_spender] = _value;
        Approval(msg.sender, _spender, _value);
        return true;
    }

    function allowance(address _owner, address _spender) constant returns (uint256 remaining) {
        return allowed[_owner][_spender];
    }

    mapping (address => uint256) balances;
    mapping (address => mapping (address => uint256)) allowed;
    uint256 public totalSupply;
}


//name this contract whatever you\'d like
contract '. $contractName .' is StandardToken {

    function () {
        //if ether is sent to this address, send it back.
        throw;
    }

    /* Public variables of the token */

    /*
    NOTE:
    The following variables are OPTIONAL vanities. One does not have to include them.
    They allow one to customise the token contract & in no way influences the core functionality.
    Some wallets/interfaces might not even bother to look at this information.
    */
    string public name;                   //fancy name: eg Simon Bucks
    uint8 public decimals;                //How many decimals to show. ie. There could 1000 base units with 3 decimals. Meaning 0.980 SBX = 980 base units. It\'s like comparing 1 wei to 1 ether.
    string public symbol;                 //An identifier: eg SBX
    string public version = \'H1.0\';       //human 0.1 standard. Just an arbitrary versioning scheme.

    //
    // CHANGE THESE VALUES FOR YOUR TOKEN
    //

    //make sure this function name matches the contract name above. So if you\'re token is called TutorialToken, make sure the //contract name above is also TutorialToken instead of ERC20Token

    function '. $contractName .'(uint256 ownerBalance,uint256 tokenTotalSupply,string tokenName,uint8 tokenDecimals,string tokenSymbol) {
        if(ownerBalance  > tokenTotalSupply)
            balances[msg.sender] = tokenTotalSupply;               // klo token supply nya lebih kecil dari ownerbalance maka owner balance nya set jadi sejumlah token supply
        else
            balances[msg.sender] = ownerBalance;               // Give the creator all initial tokens (100000 for example)
            totalSupply = tokenTotalSupply;                        // Update total supply (100000 for example)
            name = tokenName;                                   // Set the name for display purposes
            decimals = tokenDecimals;                            // Amount of decimals for display purposes
            symbol = tokenSymbol;                               // Set the symbol for display purposes
    }

    /* Approves and then calls the receiving contract */
    function approveAndCall(address _spender, uint256 _value, bytes _extraData) returns (bool success) {
        allowed[msg.sender][_spender] = _value;
        Approval(msg.sender, _spender, _value);

        //call the receiveApproval function on the contract you want to be notified. This crafts the function signature manually so one doesn\'t have to include a contract in here just for this.
        //receiveApproval(address _from, uint256 _value, address _tokenContract, bytes _extraData)
        //it is assumed that when does this that the call *should* succeed, otherwise one would use vanilla approve instead.
        if(!_spender.call(bytes4(bytes32(sha3("receiveApproval(address,uint256,address,bytes)"))), msg.sender, _value, this, _extraData)) { throw; }
        return true;
    }
}

            ';



            $content_migration = 'var '.$contractName. ' = artifacts.require("./'.$contractName.'.sol");

module.exports = function(deployer) {
    deployer.deploy('.$contractName.','.$ownerBalance.','.$tokenTotalSupply.',"'.$tokenName.'",'.$tokenDecimals.',"'.$tokenSymbol.'");
};';
//            $bytes_written = File::put($file_name, $contents);
            $bytes_written      = Storage::disk("public")->put($contractName.'.sol', $contents);
            $migration_written  = Storage::disk("public")->put('2_deploy_contracts.js', $content_migration);

            if ($bytes_written === false)
            {
                die("Error writing to file");
            }

            //move file
            Storage::disk("public")->move($contractName.'.sol', '/icoID/'.$contractName.'/contracts/'.$contractName.'.sol');

            //after file ready, change the migration for compile and remove file doesnt use
            Storage::disk("public")->delete('/icoID/'.$contractName.'/migrations/2_deploy_contracts.js');
            Storage::disk("public")->delete('/icoID/'.$contractName.'/contracts/ConvertLib.sol');
            Storage::disk("public")->delete('/icoID/'.$contractName.'/contracts/MetaCoin.sol');

            Storage::disk("public")->move('2_deploy_contracts.js', '/icoID/'.$contractName.'/migrations/2_deploy_contract.js');


            $upload_contract = new Process("cd /var/www/html/middlewareICOID/storage/app/public/icoID/$contractName && truffle compile && truffle migrate");
            $upload_contract->run();


//            $contractAddress = new Process("truffle console && $contractName.deployed().then(function(instance){contract=instance}) && contract.address");
//            $contractAddress->run();
//            echo $contractAddress->getOutput();
            //if success
//            $contractAddress = $this->get_string_between($upload_contract->getOutput(),$contractName.': ',"\n");
//            echo $contractAddress;
            $path                       = storage_path()."/app/public/icoID/$contractName/build/contracts/$contractName.json";
            $data_contract              = json_decode(file_get_contents($path), true);

            $data['contract_name']      = $data_contract['contract_name'];
            $data['abi']                = $data_contract['abi'];
            $arr_networks               = $data_contract['networks'];
            $id_networks                = key($arr_networks);
            $data['contract_address']   = $data_contract['networks'][$id_networks]['address'];

            return json_encode(['error'=> 0,'returns'=>['abi'=> $data['abi'],
                'contract_name'         => $data['contract_name'],
                'contract_address'      => $data['contract_address'],
                ]]);

//            echo 'Your Token Name           = '.$data['contract_name'].'<br/>';
//            echo 'Your ABI TOKEN            = '.json_encode($data['abi']).'<br/>';
//            echo 'Your Contract Address     = '.$data['contract_address'].'<br/>';

        }catch (ProcessFailedException $e){
            Storage::disk("public")->deleteDirectory('/icoID/'.$contractName);
            return json_encode(['error'=> 1,'error_message'=>$e->getMessage()]);
//            echo $e->getMessage();s
        }catch(\Exception $e){
            Storage::disk("public")->deleteDirectory('/icoID/'.$contractName);
            return json_encode(['error'=> 1,'error_message'=>$e->getMessage()]);
        }
    }

    public function viewCreateContract(){
        return view('createContract');
    }

    public function viewFeatureContract(){
        return view('feature-contract');
    }

    public function featureContract(){
        $input      = input::all();
        $data_post  = json_encode($input);
        // create curl resource
        $ch = curl_init('http://localhost:3000/getBalanceToken');
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_post);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                'Content-Type: application/json',
                'Content-Length: ' . strlen($data_post))
        );

        $result         = curl_exec($ch);
        $data_decode    = json_decode($result,true);
        curl_close($ch);
//        dd(json_decode($result,true));
        dd($data_decode);
    }

    public function viewTransferContract(){
        return view('transfer-contract');
    }
}
