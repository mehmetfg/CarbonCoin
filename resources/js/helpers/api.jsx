export async function getExchangeEth(currencies){
   var result
      await fetch('https://api.coingecko.com/api/v3/coins/markets?vs_currency=usd&ids=ethereum')
         .then(res => res.json())
        .then(
            (response) => {
                result=response[0].current_price
                console.log(result)
            },
            // Not: Burada hataları yakalamak önemlidir.
            // Bileşenimizde bug bulunmaması için, 'catch ()' bloğu yerine bulunan
            // bu blok içinde hatalar yakalanır.
            (error) => {
                console.log(error)
            }
        )
   return  result
}
export async function initGasPrice(){

    var result
    await fetch("https://www.etherchain.org/api/gasPriceOracle")
        .then(res => res.json())
        .then(
            (response) => {

                result= response

            },
            // Not: Burada hataları yakalamak önemlidir.
            // Bileşenimizde bug bulunmaması için, 'catch ()' bloğu yerine bulunan
            // bu blok içinde hatalar yakalanır.
            (error) => {
                console.log(error)
            }
        )

        return result
}

export async function initCyceBalanceForOwner(){

        var result
    await fetch("https://api.etherscan.io/api?module=account&action=tokenbalance&contractaddress=0xeadd9b69f96140283f9ff75da5fd33bcf54e6296&address=0x96F4C1a2EcF5fbACd04Aa7B7C0C8bAc7De737058")
        .then(res => res.json())
        .then(
            (response) => {

                result= (10000000-(parseInt(response.result))/1000000).toFixed(2)
                console.log(result)
            },
            // Not: Burada hataları yakalamak önemlidir.
            // Bileşenimizde bug bulunmaması için, 'catch ()' bloğu yerine bulunan
            // bu blok içinde hatalar yakalanır.
            (error) => {
                console.log(error)
            }
        )

    return result
}
