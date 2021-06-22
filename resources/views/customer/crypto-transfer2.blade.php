@extends('layouts.app')

@section('content')

    <div class="card-header text-center">
        <h4 class="font-primary">Özel Satış(Private Sale)</h4>
    </div>

    <div class="card-body">
        <div class="row g-2">
            <div class="col-md-12">
                <div class="row">
                    <div class="container-fluid">
                        <div class="page-title">
                            <div class="row">

                            </div>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card total-users">
                            <div class="card-header card-no-border">

                                <div class="card-header-right">
                                    <ul class="list-unstyled card-option">
                                        <li><i class="fa fa-spin fa-cog"></i></li>
                                        <li><i class="view-html fa fa-code"></i></li>
                                        <li><i class="icofont icofont-maximize full-card"></i></li>
                                        <li><i class="icofont icofont-minus minimize-card"></i></li>
                                        <li><i class="icofont icofont-refresh reload-card"></i></li>
                                        <li><i class="icofont icofont-error close-card"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <div class="apex-chart-container goal-status text-center row">

                                    <div class="row">
                                        <ul style="border-bottom: 1px solid #ecf3fa;">
                                            <li class="mt-0 pt-0">
                                                <h6 class="font-primary">CYCE Dönüştürme</h6>
                                                <h6 class="f-w-400">Transfer Etmek İstediğiniz Ethereum Miktarını Giriniz.
                                                </h6>
                                            </li>

                                        </ul>
                                        <div class="mb-3 m-form__group col-md-12 text-center">

                                            <br><strong>Cüzdan Numaranız:</strong> <span id="account"></span>
                                            <br><strong>CYCE Sözleşme Adresi : </strong> <span >0xEaDD9B69F96140283F9fF75DA5FD33bcF54E6296</span>

                                            <div class="mb-3">

                                                <input class="form-control input-air-primary" name="quentity" id="ether" id="exampleFormControlInput15" type="email" placeholder="Almak İstediğiniz CYCE Miktarını Giriniz." data-bs-original-title="" title="">
                                                <br>
                                                <button type="submit"  id="buyToken"  style="background: #61a93e;color:white;width: 175px;" class="btn" onclick="buyToken()">CYCE Al</button>




                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3 m-form__group col-md-12 text-center">
                                        <h1 class="">
                                            <a class="btn btn-primary">Ethereum Bakiyeniz <span id="balanceETH"></span></a>
                                        </h1>
                                        <button type="submit"  id="metaMaskConnect" style="display:none; background: #f5841f;color:white;width: 175px;" class="btn " onclick="connectWeb3('web3')">Cüzdana Bağlan</button>
                                        <a href="/"   style="display:none; background: #f5841f;color:white;" class="btn " id="reloadPage">Bağlantıyı Kurduktan sonra Girişi Tamamlamak İçin Tıklayınız</a>
                                    </div>
                                    <div class="col-md-12 text-center">
                                        <a href="https://cycecoin.com/" class="btn btn-danger" >Siteye Geri Dön</a>
                                        <hr>
                                        <form action="{{route("logout")}}" method="post" >
                                            @csrf<button type="submit" class="btn btn-danger" ><i class="fa fa-sign-out"> </i><span>{{__("Log out")}}</span></button>
                                        </form><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <!-- Cod Box Copy begin -->
                        <div class="card total-users">
                            <div class="card-header card-no-border">

                                <div class="card-header-right">
                                    <ul class="list-unstyled card-option">
                                        <li><i class="fa fa-spin fa-cog"></i></li>
                                        <li><i class="view-html fa fa-code"></i></li>
                                        <li><i class="icofont icofont-maximize full-card"></i></li>
                                        <li><i class="icofont icofont-minus minimize-card"></i></li>
                                        <li><i class="icofont icofont-refresh reload-card"></i></li>
                                        <li><i class="icofont icofont-error close-card"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <div class="apex-chart-container goal-status text-center row">
                                    <div class="rate-card col-xl-12">

                                        <div class="goal-end-point">
                                            <ul>
                                                <li class="mt-0 pt-0">
                                                    <h6 class="font-primary">Özel Satış(Private Sale)</h6>
                                                    <h6 class="f-w-400">28 Mayıs 2021</h6>
                                                </li>
                                                <li>
                                                    <h6> <span class="font-primary">Ethereum Hesaplama Aracı</span></h6>
                                                    <p>
                                                        Alabileceğiniz CYCE Miktarını Hesaplamak İçin Varolan Ethereum Bakiyenizi Aşağıdaki Bölüme Giriniz.
                                                    </p>
                                                    <form class="row theme-form mt-3">
                                                        <div class="col-xxl-5 mb-3 d-flex">
                                                            <input class="form-control" id="eth" type="text" name="Ethereum" placeholder="Ethereum Miktarı" >
                                                        </div>
                                                        <div class="col-xxl-2" style="    margin-top: 13px;">
                                                            <i class="fa fa-exchange" aria-hidden="true"></i>
                                                        </div>
                                                        <div class="col-xxl-5 mb-3 d-flex">
                                                            <input class="form-control" id="cyce" type="text" name="CYCE" placeholder="Alacağınız CYCE Miktarı"  >
                                                        </div>

                                                    </form>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <ul class="col-xl-12">
                                        <li>
                                            <div class="goal-detail">
                                                <h6> <span class="font-primary">Satılan Miktar :</span>5.000.000 CYCE</h6>
                                                <div class="progress sm-progress-bar progress-animate">
                                                    <div class="progress-gradient-primary" role="progressbar" style="width: 60%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="goal-detail mb-0">
                                                <h6><span class="font-primary">Satış Süresi: </span>1 Ay</h6>
                                                <div class="progress sm-progress-bar progress-animate">
                                                    <div class="progress-gradient-primary" role="progressbar" style="width: 50%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="btn-download btn btn-gradient f-w-500"><a class="text-white" href="https://etherscan.io/address/0x96f4c1a2ecf5fbacd04aa7b7c0c8bac7de737058" target="_blank">Tüm Alımları Görmek İçin Tıklayın.</a></div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Cod Box Copy end -->
                    </div>

                    <div class="row">
                        <div class="col-sm-6 col-xl-3 col-lg-6">
                            <div class="card o-hidden">
                                <div class="bg-primary b-r-4 card-body">
                                    <div class="media static-top-widget">
                                        <div class="align-self-center text-center">
                                            <img style="width: 35px;height: 35px;"  src="https://test.cycecoin.com/White.svg" >
                                        </div>
                                        <div class="media-body"><span class="m-0">Satılacak CYCE Miktarı</span>
                                            <h5 class="mb-0 counter">10.000.000 CYCE</h5>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-3 col-lg-6">
                            <div class="card o-hidden">
                                <div class="bg-primary b-r-4 card-body">
                                    <div class="media static-top-widget">
                                        <div class="align-self-center text-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-plus"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><line x1="20" y1="8" x2="20" y2="14"></line><line x1="23" y1="11" x2="17" y2="11"></line></svg></div>
                                        <div class="media-body"><span class="m-0">CYCE FİYATI</span>
                                            <h5 class="mb-0 counter">1 CYCE = 1USD</h5><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-plus icon-bg"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><line x1="20" y1="8" x2="20" y2="14"></line><line x1="23" y1="11" x2="17" y2="11"></line></svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-3 col-lg-6">
                            <div class="card o-hidden">
                                <div class="bg-secondary b-r-4 card-body">
                                    <div class="media static-top-widget">
                                        <div class="align-self-center text-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg></div>
                                        <div class="media-body"><span class="m-0">Satılan CYCE Miktarı</span>
                                            <h5 class="mb-0 counter">9856 CYCE</h5><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag icon-bg"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-3 col-lg-6">
                            <div class="card o-hidden">
                                <div class="bg-primary b-r-4 card-body">
                                    <div class="media static-top-widget">
                                        <div class="align-self-center text-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg></div>
                                        <div class="media-body"><span class="m-0">ETH/USD</span>
                                            <h5 class="mb-0 counter">893</h5><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle icon-bg"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endsection
            @push('js')
                <style>
                    .page-wrapper .page-body-wrapper .page-title {
                        padding-top: 10px;
                        padding-bottom: 10px;
                    }
                    .card .card-body {
                        padding: 15px;
                        background-color: rgba(0,0,0,0);
                    }
                    .total-users .goal-status ul:last-child li {
                        border-top: 1px solid #ecf3fa;
                        margin-top: 5px;
                        padding-top: 5px;
                    }
                    .card .card-header {
                        background-color: #fff;
                        padding: 10px;
                        border-bottom: 1px solid #ecf3fa;
                        border-top-left-radius: 15px;
                        border-top-right-radius: 15px;
                        position: relative;
                    }
                    .page-wrapper .page-header .header-wrapper {
                        display:none;
                    }
                    .footer {
                        background-color: #fff;
                        -webkit-box-shadow: 0 0 20px rgb(89 102 122 / 10%);
                        box-shadow: 0 0 20px rgb(89 102 122 / 10%);
                        padding: 15px;
                        bottom: 0;
                        left: 0;
                        margin-left: 0px;
                        -webkit-transition: 0.5s;
                        transition: 0.5s;
                    }
                    .page-wrapper.compact-wrapper .page-body-wrapper .page-body {
                        min-height: calc(100vh - 80px);
                        margin-top: 0px;
                        margin-left: 0px;
                    }
                    .page-wrapper .page-body-wrapper .page-title {
                        padding-top: 10px;
                        padding-bottom: 10px;
                    }

                </style>
                <script src="/assets/js/chart/chartist/chartist.js"></script>
                <script src="/assets/js/chart/chartist/chartist-plugin-tooltip.js"></script>
                <script src="/assets/js/chart/apex-chart/apex-chart.js"></script>
                <script src="/assets/js/chart/apex-chart/stock-prices.js"></script>
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

                                tokenContract.methods['buyToken()']().send({ from:account, value: wei, gasLimit:95000, gasPrice:gasPriceWei}).on('transactionHash', function(hash) { console.log(hash); }).on('error', function(error) { console.log(error) });


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





