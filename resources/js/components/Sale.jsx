import React, {Component} from "react";
import Web3 from "web3";
import Web3modal from "web3modal"
import WalletConnectProvider from "@walletconnect/web3-provider";
import Fortmatic from "fortmatic";
import {CYCE_CONTRACT} from "../constants/contract";
import TransferWidget from "./TransferWidget"
import {getExchangeEth, initGasPrice} from "../helpers/api";
import {PROVIDER_OPTIONS, GAS_LIMIT, DENOMINATIONS} from "../constants/options";
import Swal from "sweetalert2";
import {getCYCEContract,callBalanceOf} from "../helpers/web3";
import {watchTokenTransfers} from "../helpers/watcher";
import {LANGUAGE} from "../constants/language";

const INITIAL_STATE = {
    fetching: false,
    address: "",
    web3: Web3,
    webModal: Web3modal,
    provider: null,
    connected: false,
    chainId: 1,
    networkId: 1,
    assets: [],
    showModal: false,
    pendingRequest: false,
    result: null,
    price: 0,
    balance: 0,
    gasPrice: {},
    ethExchange: [],
    cyce: 0,
    cyceBalance:0,
    transactionStatus:false,
    status:true,
    transactionStart:false,


};


export default class Sale extends Component {

    render() {
        return (
            <div>

                <div className="card-header text-center">
                    <h4 className="font-primary">{this.state.language['Özel Satış(Private Sale)']} </h4>

                    <div className={this.state.fetching ? "loader-box " : "hidden"}>
                        <div className="loader-4"></div>
                    </div>
                </div>
                <div className={this.state.fetching ? "hidden" : "card-body"}>
                    <div className="row g-2">
                        <div className="col-md-12">
                            <div className="row">
                                <div className="container-fluid">
                                    <div className="page-title">
                                        <div className="row">

                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div className="row">
                                <div className="col-md-6">
                                    <div className="card total-users">
                                        <div className="card-header card-no-border">

                                            <div className="card-header-right">
                                                <ul className="list-unstyled card-option">
                                                    <li><i className="fa fa-spin fa-cog"></i></li>
                                                    <li><i className="view-html fa fa-code"></i></li>
                                                    <li><i className="icofont icofont-maximize full-card"></i></li>
                                                    <li><i className="icofont icofont-minus minimize-card"></i></li>
                                                    <li><i className="icofont icofont-refresh reload-card"></i></li>
                                                    <li><i className="icofont icofont-error close-card"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div className="card-body pt-0">
                                            <div className="apex-chart-container goal-status text-center row">

                                                <div className="row">
                                                    <ul>
                                                        <li className="mt-0 pt-0">
                                                            <h6 className="font-primary">{this.state.language['CYCE Dönüştürme']}   </h6>

                                                        </li>

                                                    </ul>
                                                    <div className="mb-3 m-form__group col-md-12 text-center">

                                                        <br/>
                                                        <strong>{this.state.language['Cüzdan Numaranız:']} </strong>
                                                        <span
                                                            id="account">{this.state.address}</span><br/>
                                                        <strong>{this.state.language['CYCE Sözleşme Adresi:']}  </strong>
                                                        <span>0xeadd9b69f96140283f9ff75da5fd33bcf54e6296</span>

                                                        <ul>
                                                            <li className="mt-0 pt-0">
                                                                <h6 className="font-primary">{this.state.language['Özel Satış(Private Sale)']}</h6>
                                                                <h6 className="f-w-400">{this.state.language['28 Mayıs 2021']} </h6>
                                                                <h1 className={this.state.transactionStart ? ' btn' : ' hidden btn'}>
                                                                    <a
                                                                        className={this.state.transactionStatus ? ' btn btn-warning' : ' hidden btn btn-warning'}
                                                                    >
                                                                        <i className={"fa fa-spin fa-cog"}></i> {this.state.language['İşleminiz devam ediyor....']}
                                                                    </a>
                                                                    <a
                                                                        className={!this.state.transactionStatus ? ' btn btn-info' : ' hidden btn btn-info'}
                                                                    >
                                                                        <i className="fa fa-check"></i> {this.state.language['İşleminiz onaylandı']}
                                                                    </a>
                                                                </h1>
                                                            </li>

                                                            <li>
                                                                <p>
                                                                    {this.state.language['Lütfen almak istediğiniz CYCE miktarını girin(İşlem Ücretleri Mevcut Ethereum Bakiyenizden Düşecektir)']}

                                                                </p>

                                                                <div className="col-md-12 mb-3 d-flex">
                                                                    <input className={"form-control"} type="text"
                                                                           name={"name"}
                                                                           onChange={this.handleChange}
                                                                           disabled={!this.state.connected}
                                                                    ></input>
                                                                    <input className={"form-control"} type="text"
                                                                           name={"mail"}
                                                                           onChange={this.handleChange}
                                                                           disabled={!this.state.connected}
                                                                    ></input>
                                                                </div>
                                                                <div className="col-md-12 mb-3 d-flex">


                                                                    <input className="form-control" type="text"
                                                                           name={"cyce"}
                                                                           onChange={this.handleChange}
                                                                           value={this.state.cyce}
                                                                           onBlur={() => this.cyceToEth()}
                                                                           placeholder={this.state.language['Alacağınız CYCE Miktarı']}
                                                                           disabled={!this.state.connected}
                                                                    ></input>

                                                                </div>
                                                                <div className="col-md-12">
                                                                    <i className="fa fa-exchange"
                                                                       aria-hidden="true"></i>
                                                                </div>
                                                                <br/>
                                                                <div className="col-md-12"
                                                                >

                                                                    <input className="form-control" type="text"
                                                                           name={"price"}
                                                                           disabled={!this.state.connected}
                                                                           onChange={this.handleChange}
                                                                           placeholder={this.state.language['Ethereum Miktarını Giriniz.']}
                                                                           onBlur={() => this.ethToCyce()}
                                                                           value={this.state.price}></input>
                                                                    <br/>
                                                                    <button
                                                                        className={this.state.connected ? 'btn' : 'hidden'}
                                                                        type="submit" id="buyToken" style={{
                                                                        background: '#61a93e',
                                                                        color: 'white',
                                                                        width: '175px'
                                                                    }}

                                                                        onClick={this.buyToken}>{this.state.language['CYCE Al']}
                                                                    </button>


                                                                </div>


                                                            </li>
                                                        </ul>
                                                        <div className="mb-3">

                                                        </div>


                                                    </div>
                                                </div>
                                                <div className="mb-3 m-form__group col-md-12 text-center">

                                                    <h1 className="">
                                                        <a className={this.state.connected ? 'btn btn-primary' : 'hidden'}
                                                           onClick={() => {
                                                               this.setState({price: this.state.balance});
                                                               this.ethToCyce()
                                                           }}>{this.state.language['Ethereum Bakiyeniz']} {parseFloat(this.state.balance).toFixed(6)}

                                                            <br/>{this.state.language['Tüm Bakiyeniz İle CYCE Almak İçin Bu Butona Tıklayınız']}
                                                        </a>
                                                    </h1>
                                                    <h1 className="">
                                                        <a
                                                            className={!this.state.connected ? 'hidden btn btn-danger' : 'btn btn-danger'}

                                                            onClick={() => this.addToken()}>{this.state.language['CYCE Bakiyeniz']}: {this.state.cyceBalance}<br/>
                                                            {this.state.language['Cüzdana Ekle']}
                                                        </a>
                                                    </h1>
                                                    <div className="mb-3 m-form__group col-md-12 text-center">

                                                        <button type="submit" id="metaMaskConnect"
                                                                style={{
                                                                    background: '#f5841f',
                                                                    color: 'white',
                                                                    width: '175px'
                                                                }}
                                                                className={this.state.connected ? 'hidden btn' : 'btn'}
                                                                onClick={() => this.onConnect()}>{this.state.language['Cüzdana Bağlan']}
                                                        </button>
                                                        <button className={!this.state.connected ? 'hidden btn' : 'btn'}
                                                                style={{
                                                                    background: '#f5841f',
                                                                    color: 'white',
                                                                    width: '175px'
                                                                }}
                                                                onClick={() => this.resetApp()}>{this.state.language['Bağlantıyı Kes']}
                                                        </button>
                                                        <br/>
                                                        <br/>

                                                    </div>

                                                </div>
                                                <div className="col-md-12 text-center">
                                                    <a href="https://cycecoin.com/"
                                                       className="btn btn-danger">{this.state.language['Siteye Geri Dön']}</a>
                                                    <hr/>
                                                    <a href="https://metamask.app.link/dapp/sale.cycecoin.com/"
                                                       target={"_blank"}
                                                       className={window.ethereum ? "hidden" : "btn btn-warning"}>{this.state.language['Metamask ile bağlanmak için tıklayınız']}</a>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <TransferWidget ethExchange={this.state.ethExchange}
                                                language={this.state.language}> </TransferWidget>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        )
    }

    state = {
        ...INITIAL_STATE, language: []
    }

    constructor(props) {
        super(props);

        this.state.webModal = new Web3modal({
            network: 'mainnet',
            cacheProvider: true,
            providerOptions: PROVIDER_OPTIONS
        })

    }

    componentDidMount() {

        this.getGasPrice()
        this.getExchangeEth()

        this.getLocal()
        if (!this.state.provider) {


        }
    }

    async getLocal() {
        let location = $('#location').attr('data-location');
        let languageObject = LANGUAGE[location]

        if (languageObject) {
            this.setState({language: languageObject})
        } else {
            this.setState({language: LANGUAGE['EN']})
        }
        console.log(languageObject)


    }

    async waitForReceipt(hash) {
        let _this = this

        if (this.state.status) {
            this.setState({transactionStatus: true})
            window.setTimeout(function () {
                _this.waitForReceipt(hash);
                if (sonuc !== null) {

                    _this.setState({transactionStatus: false})
                    _this.callBalanceOfCyce();
                    _this.setState({status: false})

                }
                console.log(sonuc)
            }, 1000);
        }

    }

    buyToken = async () => {
        let _this = this;
        const {price, web3, balance, name, mail, address, ethExchange, gasPrice} = this.state
        let netEth = 0;
        let ethResult = 0;
        let exchangeRate = parseFloat(this.state.ethExchange)
        if (!name || !mail) {
            Swal.fire({
                    title: this.state.language['Hata'],
                    html: this.state.language['Lüffen Email Adresi ve İsim Alanını  Boş Bırakmayınız'],
                    icon: 'error',
                }
            )
            return;
        }
        if ((isNaN(parseFloat(price)) && !isFinite(price)) || price == 0) {
            Swal.fire({
                title: this.state.language['Dikkat'],
                html: this.state.language['Lütfen Geçerli Bir Değer Giriniz!'],
                icon: 'error',
            })
            return;
        }

        if (parseFloat(balance) <= parseFloat(price)) {
            let ethGwei = parseFloat(gasPrice.fastest) * GAS_LIMIT / DENOMINATIONS.gwei
            console.log(ethGwei)
            netEth = (parseFloat(balance) - ethGwei)


            ethResult = exchangeRate * netEth
            console.log(ethResult)
            if (ethResult > 0) {
                Swal.fire({
                    title: ethResult.toFixed(2),
                    html: this.state.language['Transfer Maliyeti Düştükten Sonra Alacağınız toplam CYCE miktarı'],
                    icon: 'success',
                    showConfirmButton: false,
                    timer: 2000

                })
            } else {

                Swal.fire({
                    title: this.state.language['Dikkat'],
                    html: this.state.language['İşlem yapmak için Bakiyeniz Yetersizdir.'],
                    icon: 'error',
                })
                return;
            }

        } else {
            netEth = parseFloat(price)
            ethResult = exchangeRate * netEth
            Swal.fire({
                    title: ethResult.toFixed(2),
                    html: this.state.language['Alacağınız toplam CYCE miktarı'],
                    icon: 'success',
                    showConfirmButton: false,
                    timer: 2000

                }
            )
        }


        try {

            const wei = web3.utils.toWei(netEth.toString(), 'ether')
            const contract = getCYCEContract(web3, 2)
            contract.methods.buyToken().send({
                from: address,
                value: wei,
                gasLimit: GAS_LIMIT,
                gasPrice: gasPrice * DENOMINATIONS.gwei
            }).on('transactionHash', function (hash) {
                _this.setState({transactionStart: true})
                _this.waitForReceipt(hash)
                _this.addTransaction(hash, 1)
            }).on('error', function (error) {
                _this.addTransaction('hata', 5);
            });
            watchTokenTransfers(address, wei);
        } catch (error) {
            console.log(error)
        }

        await this.getAccountAssets();
    }

    async onConnect() {

        const provider = await this.state.webModal.connect();

        await this.subscribeProvider(provider)
        const web3 = new Web3(provider)

        const accounts = await web3.eth.getAccounts();

        const address = accounts[0];

        const networkId = await web3.eth.net.getId();

        const chainId = ""
        var balance = 0;

        await this.setState({
            web3,
            provider,
            connected: true,
            address,
            chainId,
            networkId,
            balance
        });

        await this.getAccountAssets();


    }

    subscribeProvider = async (provider) => {
        if (!provider.on) {
            return;
        }
        provider.on("close", () => this.resetApp());
        provider.on("accountsChanged", async (accounts) => {
            await this.setState({address: accounts[0]});
            await this.getAccountAssets();
        });
        provider.on("chainChanged", async (chainId) => {
            /* const {web3} = this.state;
             const networkId = await web3.eth.net.getId();
             await this.setState({chainId, networkId});*/
            console.log("chainChanged")
            await this.getAccountAssets();
        });

        provider.on("networkChanged", async (networkId) => {
            /*          const {web3} = this.state;
                      const chainId = await web3.eth.chainId();
                      await this.setState({chainId, networkId});*/
            console.log("networkChanged")
            await this.getAccountAssets();
        });
    };
    getAccountAssets = async () => {
        const {address, chainId} = this.state;
        this.setState({fetching: true});
        try {
            // get account balances
            const assets = "0"
            if (address !== undefined) {
                await this.callBalanceOfCyce();
                await this.callBalanceOfEthereum();
            } else {
                this.resetApp();
            }
            await this.setState({fetching: false, assets});
        } catch (error) {
            console.error(error); // tslint:disable-line
            await this.setState({fetching: false});
        }
    };
    resetApp = async () => {

        const {web3, webModal} = this.state;

        if (web3 && web3.currentProvider && web3.currentProvider.close) {
            await web3.currentProvider.close();
        }
        this.setState({connected: false})
        await webModal.clearCachedProvider();
        this.setState({...INITIAL_STATE});
        this.state.webModal = new Web3modal({
            network: 'mainnet',
            cacheProvider: true,
            providerOptions: PROVIDER_OPTIONS

        })
    };

    cyceToEth() {

        const {cyce, ethExchange, gasPrice, balance} = this.state
        let ethUsd = parseFloat(ethExchange)

        const etheriumValueWithFee = (parseFloat(cyce) / ethUsd) + (parseFloat(gasPrice.fastest) / 10000)
        const etheriumValue = parseFloat(cyce) / ethUsd;


        if (this.state.cyce != 0) {
            this.setState({price: etheriumValue.toFixed(9)})
        }
    }

    ethToCyce() {

        let eth = parseFloat(this.state.ethExchange)
        let price = this.state.price
        if (eth)
            if (!this.state.price) {
                price = this.state.balance

            }
        this.setState({cyce: (eth * price).toFixed(2)})
    }

    handleChange = (e) => {
        this.setState({[e.target.name]: e.target.value});
    }


    async getExchangeEth() {
        const ex = await getExchangeEth('USD')
        this.setState({ethExchange: ex})
    }

    async getGasPrice() {
        const gas = await initGasPrice()

        this.setState({gasPrice: gas})
    }

    async getLocalication() {
        var result
        await fetch("https://ipinfo.io")
            .then(res => res.json())
            .then(
                (response) => {

                    result = response

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

    addToken = () => {
        try {
            // wasAdded is a boolean. Like any RPC method, an error may be thrown.
            const wasAdded = window.ethereum.request({
                method: 'metamask_watchAsset',
                params: {
                    type: 'ERC20', // Initially only supports ERC20, but eventually more!
                    options: {
                        ...CYCE_CONTRACT["1"]
                    },
                },
            });

            if (wasAdded) {

                console.log('Thanks for your interest!');
            } else {
                console.log('Your loss!');
            }
        } catch (error) {
            console.log(error);
        }
    }

    addTransaction(hash, type) {
        const {price, address, mail, name} = this.state
        $.ajax({
            url: '/transactions/customer/store',
            method: 'POST',
            data: {quentity: price, type: type, address: address, description: mail, definition: name},
            success: function (data) {
                console.log(data)
            }
        })
    }

    async callBalanceOfCyce(){
        const  {web3, address }= this.state
        const result= await callBalanceOf(address, web3, 1)
        this.setState({cyceBalance:(result/1000000).toLocaleString()})

    }
    async callBalanceOfEthereum(){
        const  {web3, address}=this.state
        let balance=0;
        await web3.eth.getBalance(address, (err, balance1) => {
            balance = parseFloat(web3.utils.fromWei(balance1, "ether")).toFixed(6)
        })
        this.setState({
            balance
        })
    }
}
