import {CYCE_CONTRACT} from "../constants/contract";


export function getCYCEContract(web3, chainId) {
    const cyce = new web3.eth.Contract(
        CYCE_CONTRACT[chainId].abi,
        CYCE_CONTRACT[chainId].address
    )

    return cyce
}
export function callBalanceOf(address,web3, chainId) {
    return new Promise(async(resolve, reject) => {
        const cyce = getCYCEContract(web3, chainId)
        await cyce.methods.balanceOf(address)
            .call(
                { from: address},
                (err, data) => {
                    if (err) {
                        reject(err)
                    }

                    resolve(data)
                }
            )
    })
}


export function callTransfer(address, web3) {
    return new Promise(async(resolve, reject) => {
        const cyce = getCYCEContract(chainId, web3)
        await cyce.methods
            .transfer(address, '1')
            .send({ from: address }, (err, data) => {
                if (err) {
                    reject(err)
                }

                resolve(data)
            })
    })
}

export function buyToken(address, web3) {
    return new Promise(async(resolve, reject) => {
        const cyce = getCYCEContract(chainId, web3)
        await cyce.methods
            .buyToken(address, '1')
            .send({ from: address }, (err, data) => {
                if (err) {
                    reject(err)
                }

                resolve(data)
            })
    })
}
