@extends('layouts.app')
@section('content')
    <div class="card-header text-center">
        <h5>
            CYCE Alım Sayfası
        </h5>

    </div>
    <div class="card-body">
        <div class="row g-2">
            <div class="col-md-12">
                @include('adminlte-templates::common.errors')

                <div class="row">
                    <div class="mb-3 m-form__group col-md-6">
                        <a href="https://chrome.google.com/webstore/detail/metamask/nkbihfbeogaeaoehlefnkodbefgpgknn" id="metamask"  style="display: none" class="btn btn-danger" target="_blank">Metamaski indirmek için tıklayınız...</a>
                    </div>
                    <div class="row">
                        <div class="mb-3 m-form__group col-md-12 text-center">

                            <h1 class="">
                                <a class="btn btn-primary "
                                >Etherum Bakiyeniz  <span id="balanceETH"></span></a>

                            </h1>
                            <label class="form-label">Transfer Etmek İstediğiniz Etherum Miktarını Giriniz.<br><strong>Not :</strong> Alacağınız CYCE Miktarı Güncel ETH/USD Kuruna Göre 1$ Üzerinden Belirlenecektir.</label>
                            <br><strong>Cüzdan Numaranız:</strong> <span id="account"></span>
                            <br><strong>CYCE Sözleşme Adresi : </strong> <span >0xEaDD9B69F96140283F9fF75DA5FD33bcF54E6296</span>

                            <input type="text"  name="quentity" class="form-control"  id="ether">
                            <small id="balance" class="text-danger" hidden></small>
                        </div>
                    </div>

                    <div class="mb-3 m-form__group col-md-12 text-center">
                        <button type="submit"  id="buyToken"  style="background: #61a93e;color:white;width: 175px;" class="btn" onclick="buyToken()">CYCE Al</button>
                        <button type="submit"  id="metaMaskConnect" style="display:none; background: #f5841f;color:white;width: 175px;" class="btn " onclick="connectWeb3('web3')">Cüzdana Bağlan</button>
                        <a href="/"   style="display:none; background: #f5841f;color:white;width: 175px;" class="btn " id="reloadPage">Bağlantıyı Kurduktan sonra Girişi Tamamlamak İçin Tıklayınız</a>
                    </div>


                    <div class="col-md-12 text-center">
                        <a href="https://cycecoin.com/" class="btn btn-danger" >Siteye Geri Dön</a>
                        <form action="{{route("logout")}}" method="post" >
                            @csrf<button type="submit" class="link " ><i data-feather="log-in"> </i><span>{{__("Log out")}}</span></button>
                        </form>
                    </div>

                </div>
            </div>
            @endsection
            @push('js')
                <script>

                    var gasPriceVar=0;
                    fetch("https://www.etherchain.org/api/gasPriceOracle").then(function (response) {
                        response.json().then(function (post) {
                            console.log(post.fastest)
                            gasPriceVar=post.fastest
                        })
                    }).catch(function (err) {
                        //hata olma durumunda catch fonksiyonu çalışacaktır.
                    })
                    var abi=JSON.parse('[{"inputs":[{"internalType":"address","name":"_cyceToken","type":"address"},{"internalType":"address","name":"_weth","type":"address"},{"internalType":"address","name":"_factory","type":"address"},{"internalType":"address","name":"_usd","type":"address"}],"stateMutability":"nonpayable","type":"constructor"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"previousOwner","type":"address"},{"indexed":true,"internalType":"address","name":"newOwner","type":"address"}],"name":"OwnershipTransferred","type":"event"},{"anonymous":false,"inputs":[{"indexed":false,"internalType":"address","name":"user","type":"address"},{"indexed":false,"internalType":"uint256","name":"amount","type":"uint256"}],"name":"purchase","type":"event"},{"inputs":[],"name":"WETH","outputs":[{"internalType":"address","name":"","type":"address"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"buyToken","outputs":[],"stateMutability":"payable","type":"function"},{"inputs":[],"name":"cyceToken","outputs":[{"internalType":"address","name":"","type":"address"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"geUnlockTime","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"getUSDValue","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"uint256","name":"time","type":"uint256"}],"name":"lock","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[],"name":"owner","outputs":[{"internalType":"address","name":"","type":"address"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"renounceOwnership","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"","type":"address"}],"name":"tokenList","outputs":[{"internalType":"address","name":"","type":"address"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"newOwner","type":"address"}],"name":"transferOwnership","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[],"name":"uniswapFactory","outputs":[{"internalType":"contract IUniswapV2Factory","name":"","type":"address"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"unlock","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[],"name":"usdPair","outputs":[{"internalType":"address","name":"","type":"address"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"withdraw","outputs":[],"stateMutability":"nonpayable","type":"function"}]')
                    async function connectWeb3(type) {
                        var cont = false;
                        if (type === 'web3') {
                            if (typeof ethereum !== 'undefined') {
                                window.ethereum.enable();
                                document.getElementById("metaMaskConnect").style.display="none";
                                document.getElementById("reloadPage").style.display="inline";
                            } else if (typeof web3 !== 'undefined') {
                                eth = new Web3Eth(web3.givenProvider);
                            } else {
                                alert("Lütfen Bilgisayarınıza Metamask Yükleyiniz")
                                document.getElementById("metamask").style.display="block";
                            }
                            typeOfLogin = type;

                        } else {
                            switch (type) {
                                //case 'fortmatic':
                                //    if (net == 'mainnet') {
                                //        walletObj = new Fortmatic('pk_live_B9A57A525317B46C');

                                //    } else {
                                //        walletObj = new Fortmatic('pk_test_55D11D05C26BB408', net);
                                //    }

                                //    eth = new Web3Eth(walletObj.getProvider());
                                //    nonBrowserWallet = true;
                                //    typeOfLogin = type;
                                //    break;

                                //case 'portis':
                                //    walletObj = new Portis('c7951b32-a4dd-4348-beee-318fe070bcbe', net);
                                //    eth = new Web3Eth(walletObj.provider);
                                //    nonBrowserWallet = true;
                                //    typeOfLogin = type;
                                //    break;

                                case 'walletConnect':
                                    // for walletConnect we need to preemptively close the modal


                                    // is there a way for us to catch the qrmodal rejection and flush the object? TODO
                                    try {


                                        var walletConnectEnableTask = window.ethereum.enable();



                                        await walletConnectEnableTask;
                                        eth = new Web3Eth(walletConnectObj);
                                        nonBrowserWallet = true;
                                        typeOfLogin = type;

                                        break;
                                    } catch (err) {
                                        console.log('Error from WalletConnect: ' + err);
                                        alert('Failed to establish a connection to WalletConnect.');
                                        var isInIFrame = (window.location != window.parent.location);
                                        if (isInIFrame) {
                                            var element = window.parent.document.getElementById("writecontractiframe");
                                            element.style.removeProperty("min-height");
                                        }
                                        resetPage();
                                        return;
                                    }
                            }
                        }


                    }
                    if (window.ethereum) {
                        var gasPriceWei;
                        web3 = new Web3(window.ethereum);
                        web3.eth.getGasPrice(function(e, r) {gasPriceWei=r })
                        web3.eth.getAccounts(function(err, accounts){
                            if (err != null) console.error("An error occurred: "+err);
                            else if (accounts.length == 0) {
                                document.getElementById("buyToken").style.visibility="hidden"
                                document.getElementById("metaMaskConnect").style.display="inline"
                            }
                            else {
                                account=web3.currentProvider.selectedAddress
                                web3.eth.getBalance(account, (err, balance) => {
                                    balance = web3.utils.fromWei(balance, "ether") + " ETH"
                                    document.getElementById("balanceETH").innerHTML=balance
                                    document.getElementById("account").innerHTML=account
                                    updateUserPublicKey(account);
                                    document.getElementById("metaMaskConnect").style.display="none"
                                });

                            }
                        });

                        function buyToken(){

                            // Modern dapp browsers...


                            try {
                                // Request account access if needed
                                // Acccounts now exposed


                                var value= document.getElementById("ether").value;
                                if(value==''){

                                    alert("Lütfen Geçerli Bir Değer Giriniz")
                                }
                                if(isNaN(parseFloat(value)) && !isFinite(value)){
                                    alert("Geçerli Bir değer Giriniz")
                                    return;
                                }
                                var wei=web3.utils.toWei(value, 'ether')

                                //web3.setProvider(new web3.providers.HttpProvider('https://mainnet.infura.io/v3/89a1a674afc246438074d9511e192823'))
                                eth = new Web3Eth(ethereum);
                                var tokenContract = new eth.Contract(abi,'0x96F4C1a2EcF5fbACd04Aa7B7C0C8bAc7De737058')

                                    var gasPriceWei=gasPriceVar*1000000000

                                tokenContract.methods['buyToken()']().send({ from:account, value: wei, gasLimit:120000, gasPrice:gasPriceWei}).on('transactionHash', function(hash) { addTransaction(hash, 1) }).on('error', function(error) {  addTransaction('hata',5); });


                                /*web3.eth.sendTransaction({
                                    from: "0xC31D181dD24CA32cba0c0099E36D011FEe5CF857",
                                    to: "0x26f21B52f717c31AE7280D6ac2CF4C41738A9384",
                                    value: web3.utils.toWei("0.0001", "ether"),
                                }, function(err, transactionHash) {
                                    if (err) {
                                        console.log(err);
                                    } else {
                                        console.log(transactionHash);
                                    }
                                });*/
                            } catch (error) {
                                // User denied account access...
                            }
                        }

                        function updateUserPublicKey(publicKey){
                            $.ajax({
                                url:'{{route("customer.publickey.update")}}',
                                data:{publicKey:publicKey},
                                success:function (data){

                                }
                            })
                        }

                        function addTransaction(hash, type){
                        var etherValue= document.getElementById("ether").value;
                        var date=Date.now()
                            $.ajax({
                                url:'{{route("transactions.store")}}',
                                method:'POST',
                                data:{quentity:etherValue, type:1, address:account, description:hash, dealer_id:5},
                                success:function (data){
                                        console.log(data)
                                }
                            })
                        }
                    }
                    // Legacy dapp browsers...
                    else if (window.web3) {
                        window.web3 = new Web3(web3.currentProvider);
                        // Acccounts always exposed
                        web3.eth.sendTransaction({/* ... */});
                    }
                    // Non-dapp browsers...
                    else {
                        document.getElementById("buyToken").style.display="none"
                        document.getElementById("metaMaskConnect").style.display="inline"
                        console.log('No web3 instance injected, using Local web3.');
                    }
                </script>
    @endpush
