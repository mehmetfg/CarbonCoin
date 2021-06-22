import {confirmEtherTransaction} from "./confirm";
import {CYCE_CONTRACT} from "../constants/contract";
import {getCYCEContract} from "./web3";
import Web3 from "web3";
export function watchTokenTransfers(address, wei) {
    // Instantiate web3 with WebSocketProvider
    const web3 = new Web3(new Web3.providers.WebsocketProvider('wss://mainnet.infura.io/ws/v3/89a1a674afc246438074d9511e192823'))

    // Instantiate token contract object with JSON ABI and address
    const tokenContract = getCYCEContract(web3, 2)

    // Generate filter options
    const options = {
        filter: {
            _from:  address,
            _to:    CYCE_CONTRACT[2].address,
            _value: wei
        },
        fromBlock: 'latest'
    }


    // Subscribe to Transfer events matching filter criteria
    tokenContract.events.Transfer(options, async (error, event) => {
        if (error) {

            console.log(error)
            return
        }

        console.log('Found incoming Pluton transaction from ' + address+ ' to ' + CYCE_CONTRACT[2].address + '\n');
        console.log('Transaction value is: ' + wei)
        console.log('Transaction hash is: ' + txHash + '\n')

        // Initiate transaction confirmation
        confirmEtherTransaction(event.transactionHash)

        return
    })
}
