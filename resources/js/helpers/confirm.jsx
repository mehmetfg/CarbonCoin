async function getConfirmations(txHash) {
    try {
        // Instantiate web3 with HttpProvider
        const web3 = new Web3('https://mainnet.infura.io/v3/89a1a674afc246438074d9511e192823')

        // Get transaction details
        const trx = await web3.eth.getTransaction(txHash)

        // Get current block number
        const currentBlock = await web3.eth.getBlockNumber()

        // When transaction is unconfirmed, its block number is null.
        // In this case we return 0 as number of confirmations
        return trx.blockNumber === null ? 0 : currentBlock - trx.blockNumber
    }
    catch (error) {
        console.log(error)
    }
}

export function confirmEtherTransaction(txHash, confirmations = 10) {
    setTimeout(async () => {
        // Get current number of confirmations and compare it with sought-for value
        const trxConfirmations = await getConfirmations(txHash)
        console.log('Transaction with hash ' + txHash + ' has ' + trxConfirmations + ' confirmation(s)')

        if (trxConfirmations >= confirmations) {
            // Handle confirmation event according to your business logic

            console.log('Transaction with hash ' + txHash + ' has been successfully confirmed')

            return
        }
        // Recursive call
        return confirmEtherTransaction(txHash, confirmations)
    }, 30 * 1000)
}

