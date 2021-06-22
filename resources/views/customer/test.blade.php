

<html>
<head>
    <meta charset="utf-8">
    <meta name="fortmatic-site-verification" content="q6QiF6hQJIdeCSLw" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" href="/assets/vendor/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="/assets/vendor/font-awesome/css/all.css">
    <style type="text/css">
        html {
            font-size: 13px;
        }

        body {
            font-family: Helvetica Neue,Helvetica,Arial,sans-serif;
        }

        a {
            color: #3498db;
        }

        a:hover {
            color: #1d6fa5;
        }

        .text-primary {
            color: #3498db !important;
        }

        .btn-link:hover {
            color: #1d6fa5;
            text-decoration: none;
        }

        .card-btn-arrow {
            display: inline-block;
            color: #3498db;
            margin-top: 5px;
        }

        #overlay {
            /*background: #ffffff;*/
            background: rgba(255,255,255,.7);
            color: #666666;
            position: fixed;
            height: 100%;
            width: 100%;
            z-index: 5000;
            top: 0;
            left: 0;
            float: left;
            text-align: center;
            padding-top: 10%;
            display: none;
        }

        .accordion-arrow {
            display: inline-block;
            transition: 0.3s ease-in-out;
        }

        .collapsed .accordion-arrow {
            transform: rotate(-90deg);
        }

        body.dark-mode {
            color: #a2b9c8;
            background-color: #112641 !important;
        }

        body.dark-mode .bg-light {
            background-color: #01263f !important
        }

        body.dark-mode .text-secondary {
            color: #7295ac !important
        }


        body.dark-mode .border, body.dark-mode .border-bottom, body.dark-mode .border-top, body.dark-mode .u-ver-divider--left:after, body.dark-mode .u-ver-divider:after {
            border-color: #013558 !important
        }

        body.dark-mode p {
            color: #a2b9c8
        }

        body.dark-mode .modal-footer, body.dark-mode .modal-header {
            border-color: #013558
        }

        body.dark-mode .card {
            border-color: transparent !important;
            background-color: #012137 !important;
            box-shadow: 0 .5rem 1.2rem rgba(4,76,124,.2)
        }

        body.dark-mode .card-header {
            background-color: #012137 !important;
            border-color: #013558
        }

        body.dark-mode .card-header-title {
            color: #a2b9c8
        }

        body.dark-mode .card-btn {
            color: #a2b9c8
        }

        body.dark-mode .form-control::-webkit-input-placeholder {
            color: #577c93
        }

        body.dark-mode .form-control::-moz-placeholder {
            color: #577c93
        }

        body.dark-mode .form-control::-ms-input-placeholder {
            color: #577c93
        }

        body.dark-mode .form-control::placeholder {
            color: #577c93
        }

        body.dark-mode .link-hover-secondary, body.dark-mode .text-dark, body.dark-mode .text-link, body.dark-mode .text-muted, body.dark-mode .text-white {
            color: #a2b9c8 !important
        }

        body.dark-mode .custom-select, body.dark-mode .form-control, body.dark-mode .input-group-text {
            color: #a2b9c8 !important;
            border-color: #013558 !important;
            background-color: #01263f !important
        }

        body.dark-mode .btn-primary, body.dark-mode .btn-primary:not([href]), body.dark-mode .btn-primary:not([href]):not([href]):not(:disabled):not(.disabled) {
            color: rgba(255, 255, 255, 0.8);
            background-color: rgba(52, 152, 219, 0.2);
            border-color: rgba(52, 152, 219, 0.2);
        }

        body.dark-mode .btn-primary:focus, body.dark-mode .btn-primary:hover, body.dark-mode .btn-primary:not([href]):focus, body.dark-mode .btn-primary:not([href]):hover, body.dark-mode .btn-primary:not([href]):not([href]):not(:disabled):not(.disabled):focus, body.dark-mode .btn-primary:not([href]):not([href]):not(:disabled):not(.disabled):hover {
            color: white;
            background-color: #3498db;
        }

        .badge-red {
            background: #e74c3c;
        }

        .badge-green {
            background: rgb(0,128,0);
        }

        @media (max-width:500px) {
            .walletconnect-modal__base {
                top: 290px !important;
                width: 100% !important;
            }
        }

        @media (min-width:501px) {
            .walletconnect-modal__base {
                top: 290px !important;
                width: 70% !important;
            }
        }

        body.dark-mode .close {
            color: rgba(192, 211, 223, 0.7);
            text-shadow: none;
        }

        body.dark-mode .close:hover {
            color: #c0d3df !important;
        }

        body.dark-mode .modal-content {
            background-color: #132a47;
        }

        body.dark-mode .modal-header,
        body.dark-mode .modal-footer {
            border-color: #18365b;
        }

        /* Custom Button (Wallet) */
        .btn-custom-wallet {
            padding-top: 0.75rem;
            padding-bottom: 0.75rem;
            border: 1px solid #d5dae2;
        }

        .btn-custom-wallet:hover {
            color: #3498db;
            border-color: #3498db;
        }
        /* Custom Badge (Wallet) */
        .badge-custom-wallet {
            padding: 0.5rem 0.75rem;
            border-radius: 5rem;
            font-size: 10px;
        }

        .badge-soft-secondary {
            color: #77838f;
            background-color: rgba(119,131,143,.1);
        }
    </style>
    <script async src='/cdn-cgi/bm/cv/669835187/api.js'></script></head>
<body>
<div id="overlay" class="py-3 text-center">
    <img src="/images/main/loadingblock.svg" alt="Loading" />
</div>
<div id="header">
</div>
<div class="panel-group acc-v1" id="accordion" role="tablist" aria-multiselectable="true">
</div>
<div id="footer" class="mr-3" style="display:none">
    <p align='right'>Powered by <a href='https://etherscan.io' target='_parent'>Etherscan.io</a>. Browse <a rel='nofollow noopener' href='https://github.com/etherscan/writecontract' target='_blank'>source code</a></p>
</div>
<input type="hidden" id="hdnInputId" value="" />
<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" id="myModalConvert">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Add Zeroes</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                <div class="input-group-prepend d-md-block">

                    <select id="ddConvert" name="ddConvert" class="custom-select custom-select-lg" onchange="calcuateValue();">
                        <option selected value="0">Select</option>
                        <option value="1">10&#8310;</option>
                        <option value="2">10&#8312;</option>
                        <option value="3">10&#185;&#8312;</option>
                        <option value="4">Custom</option>
                    </select>

                </div>
                <div class="w-auto mt-2">
                    <label id="lblValue" class="form-control form-control-lg"><span id="spanValue"></span></label>
                    <input type="number" id="txtCustom" class="form-control form-control-lg" min="1" max="18" maxlength="2" oninput="javascript: if (this.value > 18) this.value = 18;" />
                    <div class="small text-secondary mt-1" id="divNote">
                        <span>Enter the number of zeroes to add. Example: 3 to add three (000) zeroes.</span>
                    </div>
                </div>
                </p>
            </div>
            <div class="modal-footer">
                <button data-dismiss="modal" class="btn btn-secondary btn-xs" type="button">Cancel</button>
                <button class="btn btn-primary btn-xs" type="button" id="btnContinueConvert" onclick="setValue();">Add</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="WalletModalProxyIframeNew" tabindex="-1" aria-labelledby="walletModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-dark font-weight-bold" id="ProxyModalLabelNew">Connect a Wallet</h5>
                <button type="button" class="close close-md" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <button type="button" onclick="connectWeb3('web3')" class="btn btn-lg btn-custom-wallet btn-block d-flex justify-content-between align-items-center">
<span class="text-dark d-flex align-items-center">
MetaMask <span class="badge badge-soft-secondary badge-custom-wallet ml-2">Popular</span>
</span>
                    <img width="25" src="../images/svg/brands/metamask.svg" alt="">
                </button>
                <button type="button" onclick="connectWeb3('walletConnect')" class="btn btn-lg btn-custom-wallet btn-block d-flex justify-content-between align-items-center">
                    <span class="text-dark">WalletConnect</span>
                    <img width="25" src="../images/svg/brands/walletconnect.svg" alt="">
                </button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">(function(){window['__CF$cv$params']={r:'658742826f45fd01',m:'ab92f55e9b9b6da38d6af0441b6c697d67d2414b-1622538112-1800-AYZvmnH0oyfWgKmIcNmMLXRNlYzoUW2iKtEPmw+wpprBUJWy+2m/cVw3o4rXzoKlooWJT+H/r3ZoWzWumiqqPx//tHLt0X+2Ms9Eg+a5txZhO37SyZyypaeDwq7pNgGZ/hKuKcRLsoPsuYgJQuZ50s42EltG36XuSUw7OuOuFuBfkJBo/oK+z5pEZmrNgqDvkqF81OD8HS8Il7+83D89RnRvry38gT4MnxYFc49iSsUzS6OuwrcffC1JEVJ98o7OsA==',s:[0xfcbe981cc7,0xc6d43a9d80],}})();</script></body>
<script src="/assets/vendor/jquery/dist/jquery.min.js"></script>
<script src="/assets/vendor/jquery-migrate/dist/jquery-migrate.min.js"></script>
<script src="/assets/vendor/bootstrap/bootstrap.bundle.min.js"></script>
<script src="/assets/js/custom/web3-utils.min.js"></script>
<script src="/assets/js/custom/web3-eth.min.js"></script>
<script src="/assets/js/custom/web3-providers-http.min.js"></script>

<script src="/assets/js/custom/walletconnect.js"></script>
<script src="/assets/js/custom/web3.min.js"></script>
<script>
    var mode = getParameterByName("m");
    var contractAddress = getUrlParameter('a');
    var implementation = getParameterByName("p");
    var contractframe = "";
    var loadingcontractframe = "";
    var cardHeightDict = {};

    console.log(window.parent.document.URL);
    if (window.parent.document.URL.indexOf('writeProxyContract') != -1) {
        contractframe = "writeproxycontractiframe";
        loadingcontractframe = "loadingWriteProxyContractframe";
    } else {
        contractframe = "writecontractiframe";
        loadingcontractframe = "loadingWriteContractframe";
    }

    jQuery(window).load(function () {
        jQuery('#overlayMain').fadeOut();
        try {
            window.parent.document.getElementById(loadingcontractframe).style.display = "none";
            window.parent.document.getElementById('overlayMain').style.display = 'none';
        } catch (err) { }
        if (mode === "dark") {
            var src = $('body');
            src.addClass('dark-mode');
        }
    });

    var header = $('#header');
    var body = $('#accordion');
    var net = getUrlParameter('n');
    var address;
    var ABI = '';
    var proxyABI = '';
    var eth;
    var myContract;
    var myContractInstance;
    var myProxyContractInstance;
    var hasInput = false;
    var api = '';
    var isAccount = false;

    // option for external wallets
    var nonBrowserWallet = false;
    var typeOfLogin;
    var walletObj;

    // walletConnect related variable - Create these earlier so we can hook "disconnect" event
    var WalletConnectProvider = window.WalletConnectProvider.default;
    var walletConnectObj = new WalletConnectProvider({
        infuraId: 'dbd67a522fc4476c95ca076ac34d69fc',
        bridge: "https://etherscan.bridge.walletconnect.org",
    });

    window.addEventListener('DOMContentLoaded', (event) => {
        walletConnectObj.on('disconnect', function (error, payload) {
            window.location.reload(true)
        });
    });

    String.prototype.escape = function () {
        var tagsToReplace = {
            '&': '&amp;',
            '<': '&lt;',
            '>': '&gt;'
        };
        return this.replace(/[&<>]/g, function (tag) {
            return tagsToReplace[tag] || tag;
        });
    };

    if ((contractAddress !== undefined) || (net !== undefined)) {
        if (net === 'mainnet')
            api = '//api.etherscan.io';
        else
            api = '//api-' + net + '.etherscan.io';
        appendABI(contractAddress, body, 5);
    }

    async function resetPage() {
        if (nonBrowserWallet == true) {
            switch (typeOfLogin) {
                //case 'fortmatic':
                //    await walletObj.user.logout();
                //    window.location.reload(true);
                //    break;
                //case 'portis':
                //    await walletObj.logout();
                //    window.location.reload(true);
                //    break;
                case 'walletConnect':
                    await walletConnectObj.close();
                    await walletConnectObj.disconnect();
                    window.location.reload(true);
                    break;
            }
        } else {
            // refresh to logout
            window.location.reload(true);
        }
    }


    function appendABI(contractAddress, body, maxDepth, isProxy) {
        $.getJSON(api + '/api?module=contract&apikey=ECW48G82VV9G4VBY5R392CPH24NFDGEA5E&action=getabi&address=' + (implementation ? implementation : contractAddress), function (data) {
            if (data.status == '0') {
                header.append("<br><div id='sorrynotfound' class='alert alert-warning mb-0' role='alert'>Sorry, we were unable to locate a matching Contract ABI or SourceCode for this contract.<br><br>If you are the contract owner, please <a href='https://etherscan.io/verifyContract?a=" + contractAddress + "' target='_parent'>Verify Your Contract Source Code</a> here.</div>");
            } else {

                var result = JSON.parse(data.result);
                var counter = 0;
                var maxCounter = 0;

                if (isProxy)
                    proxyABI = result;
                else
                    ABI = result;

                $.each(result, function (index, value) {
                    if (value.type === "function") {
                        if (value.stateMutability === "view" || value.stateMutability === "pure" || value.constant === true) {
                            return;
                        }

                        if (value.name === undefined) {
                            return;
                        }

                        var value_name = value.name.toString();

                        if (value_name === "") {
                            return;
                        }
                        counter += 1;

                        var value_function;
                        var illegal = false;
                        if (value.inputs.length !== 0) {
                            // start bracket
                            value_function = value_name + "(";
                            for (var i = 0; i < value.inputs.length; i++) {
                                if (value.inputs[i].type.toString().indexOf("tuple") > -1) {
                                    illegal = true;
                                    value_function = value_name; // tuple will not be recognised by function
                                    break;
                                } else {
                                    value_function = value_function + value.inputs[i].type.toString() + ","
                                }
                            }
                            if (illegal != true) {
                                value_function = value_function.substring(0, value_function.length - 1);
                                value_function = value_function + ")";
                            }
                        } else {
                            value_function = value_name + "()";
                        }


                        if (value.stateMutability === "payable") {
                            //v0.6.0 support
                            var isPayable = true;
                        } else {
                            var isPayable = value.payable;
                        }


                        var counterInput = 0;
                        var maxItemsInput = value.inputs.length;
                        var inputExtr_WithName = '';

                        if (isPayable) {
                            inputExtr_WithName += ' <div class="form-group"><label>' + value_name + ' </label>' +
                                '<input type="text" class="form-control form-control-xs" id="input_payable_' + counter + '_' + value_name + '" name="payable_' + value_name + '" placeholder="&nbsp; payableAmount (ether)"></div>';
                        }

                        var inputId = "input_" + counter;
                        if (isProxy)
                            inputId += "_proxy_" + maxDepth;

                        if (value.inputs.length > 0) {
                            $.each(value.inputs, function (i, v) {
                                counterInput += 1;
                                var inputTag = '';
                                var inputName = v.name.toString();

                                if (v.type.indexOf('][') !== -1) {
                                    var regex = /\[([0-9,-]+)\]/;
                                    var tmp = v.type.toString().match(regex);
                                    var dynamicArray;
                                    if (tmp === null) {
                                        dynamicArray = 1; //todo
                                    } else {
                                        dynamicArray = tmp[1];
                                    }
                                    var d;
                                    inputTag = ' <div class="form-group"><label>' + inputName + ' (' + v.type.toString() + ') </label>';
                                    for (d = 0; d < dynamicArray; d++) {
                                        var counterInputGroup = "g" + counterInput;

                                        if (isProxy) {
                                            counterInputGroup += "_proxy_" + maxDepth;
                                        }

                                        inputTag += '<input type="text" style="margin-bottom:5px" class="form-control form-control-xs" id="input_' + counter + '_' + d + '" name="input_' + counter + '" data-grp="' + counterInputGroup + '" data-type="' + v.type.toString() + '" placeholder="&nbsp; ' + inputName + '[]">';

                                    }

                                    inputTag += '</div>';


                                } else {
                                    inputTag = GenerateInputTag(inputName, inputId, counter, counterInput, v.type.toString());
                                }

                                inputExtr_WithName += inputTag;
                            });
                        }

                        inputExtr_WithName += "<button type='button' class='write-btn btn btn-xs btn-primary border' onclick=\"write0('" + value_function + "', '" + inputId + "');\">Write</button> <div style='display:inline' class='write-msg text-success " + inputId + "'></div>";

                        // inputExtr_WithName += "<button type='button' class='write-btn btn btn-xs btn-primary border' onclick=\"write0('" + value_name + "', 'input_" + counter + "');\">Write</button> <div style='display:inline' class='write-msg text-success input_" + counter + "'></div>";


                        GenerateRow(value_name, inputExtr_WithName, counter, body);

                    }
                });

                $('.writeContractFunction').on('shown.bs.collapse', function (x) {
                    var id = $($(x.target)).prev().attr('id');
                    var obj = window.parent.document.getElementById(contractframe);

                    var cardBodyHeight = $($(x.target)).height();

                    $(obj).height(($(obj).height() + cardBodyHeight) + "px")

                    cardHeightDict[id] = cardBodyHeight;
                });

                $('.writeContractFunction').on('hidden.bs.collapse', function (x) {
                    var id = $($(x.target)).prev().attr('id');
                    var obj = window.parent.document.getElementById(contractframe);
                    $(obj).height(($(obj).height() - cardHeightDict[id]) + "px");
                });

                $('#footer').show();
                if (hasInput == false) {
                    header.append('<div id="sorrynotfound" class="alert alert-warning mb-0" role="alert">Sorry, no public Write functions were found for this contract.</div>');
                }
            }
            $('.write-btn').addClass('disabled');

            var obj = window.parent.document.getElementById(contractframe);
            if (obj !== null)
                parent.resizeIframe(obj, 0);
        });
    }

    function clearPopup(data) {
        $("#lblValue").hide();
        $("#txtCustom").hide();
        $("#divNote").hide();
        document.getElementById("ddConvert").value = "0";
        $("#spanValue").text("");
        var strSplit = data.id.split("_");
        var inputId = "input_" + strSplit[1] + "_" + strSplit[2]
        $("#hdnInputId").val(inputId);
    }

    function calcuateValue() {
        var ddVal = document.getElementById("ddConvert").value;
        if (ddVal != "0" && ddVal != "4") {
            $("#txtCustom").hide();
            $("#divNote").hide();
        }

        if (ddVal != "0") {
            if (ddVal == "1") {
                $("#spanValue").text("6");
            } else if (ddVal == "2") {
                $("#spanValue").text("8");
            } else if (ddVal == "3") {
                $("#spanValue").text("18");
            } else if (ddVal == "4") {
                $("#txtCustom").val("");
                $("#txtCustom").show();
                $("#divNote").show();
                $("#lblValue").hide();
                $("#txtCustom").focus();
            }
        } else {
            $("#spanValue").text("");
        }
    }

    function setValue() {
        var id = $("#hdnInputId").val();
        var ddVal = document.getElementById("ddConvert").value;
        var txtVal = ($("#" + id).val() == "" ? "1" : $("#" + id).val());
        var strArr = ['mwei', 'gwei', 'ether'];
        var web3 = new Web3();
        var inputVal = "";

        if (ddVal == "4") {
            var custVal = "";
            if ($("#txtCustom").val() == "18") {
                inputVal = web3.utils.toWei(txtVal, strArr[2]);
            } else {
                custVal = Math.pow(10, $("#txtCustom").val());
                inputVal = parseFloat(txtVal) * custVal;
            }

            $("#" + id).val(inputVal);
        } else {
            if (ddVal == "1") {
                inputVal = web3.utils.toWei(txtVal, strArr[0]);
            } else if (ddVal == "2") {
                inputVal = web3.utils.toWei(txtVal, strArr[1]);
                inputVal = inputVal.substring(0, inputVal.length - 1);
            } else if (ddVal == "3") {
                inputVal = web3.utils.toWei(txtVal, strArr[2]);
            }

            $("#" + id).val(inputVal);
        }
        $('#myModalConvert').modal('hide');
    }

    function GenerateInputTag(inputName, inputId, counter, counterInput, type) {

        var strButton = "";
        if (type == "uint256") {
            strButton = '<button type="button" class="btn btn-sm btn-secondary ml-2 mb-2" id="btnConvert_' + counter + '_' + counterInput + '" data-toggle="modal" data-target="#myModalConvert" onclick="clearPopup(this);" title="Add Zeroes"><i class="fas fa-plus"></i></button>';
        }

        if (inputName !== "") {
            return ' <div class="form-group"><label>' + inputName + ' (' + type + ') </label>' + strButton +
                '<input type="text" class="form-control form-control-xs" name="' + inputId + '" id="input_' + counter + '_' + counterInput + '" data-type="' + type + '" placeholder="&nbsp; ' + inputName + ' (' + type + ')"></div>';

        } else {
            return ' <div class="form-group"><label>' + type + '</label>' + strButton +
                '<input type="text" class="form-control form-control-xs" name="' + inputId + '" data-type="' + type + '" id="input_' + counter + '_' + counterInput + '" placeholder=" &nbsp; &lt;input&gt (' + type + ')"></div>';
        }

    }

    function GenerateRow(fieldName, outputFieldsWithName, counter, body) {
        if (!hasInput) {
            hasInput = true;
            header.append('<div class="d-sm-flex justify-content-between mb-3"><p class="ml-3 mr-3 mb-1"><button type="button" class="write-btn btn btn-xs btn-secondary border disabled" id="connectStatus" id="connectWeb3" onclick="openModal(); return false;"><i id="connector" class="fa fa-circle text-danger mr-1"></i>Connect to Web3</button></p><span><a href="#" class="mr - 1 expandCollapseAllButton" onclick="expandCollapseAll()">[Expand all]</a><a class="ml-3 mr-3" href="#" onclick="resetPage(); return false;">[Reset]</a></span></div >');
        }
        var output = '<div class="card shadow-none mb-3"><div class="card-header bg-light card-collapse p-0" role="tab" id="heading' + counter + '">' +
            '<a role="button" class="btn btn-link btn-block text-dark d-flex justify-content-between align-items-center py-2 collapsed"  data-toggle="collapse" data-parent="#accordion" href="#collapse' + counter + '" aria-expanded="true" aria-controls="collapse' + counter + '">' + counter + '. ' + fieldName + '<span class="accordion-arrow"><i class="fas fa-arrow-down small"></i></span></a></div>' +
            '<div id="collapse' + counter + '" class="collapse writeContractFunction" role="tabpanel" aria-labelledby="heading' + counter + '"><div class="card-body"><form>' + outputFieldsWithName + '</form></div></div></div>';

        body.before(output);
    }


    var isCollapsed = true;

    function expandCollapseAll() {
        if (isCollapsed) {
            $('.collapse.writeContractFunction').collapse('show');
            isCollapsed = false;
            $('.expandCollapseAllButton').html('[Collapse All]');
        } else {
            $('.collapse.writeContractFunction').collapse('hide');
            isCollapsed = true;
            $('.expandCollapseAllButton').html('[Expand All]');
        }
    }


    function NewProxySection(body, address) {
        let section = '<p>Showing ABI for possible implementation <a href="/address/' + address + '#writeContract" target="_blank" >' + address + '</a></p><div class="panel-group acc-v1" id="impl' + address + '" role="tablist" aria-multiselectable="true"></div>';
        $("#footer").before(section);
        return $('#impl' + address);
    }

    function openModal() {
        try {
            if (window.parent.document.URL.indexOf('writeProxyContract') != -1) {
                parent.openProxyModal();
            } else {
                var isInIFrame = (window.location != window.parent.location);
                if (isInIFrame) {
                    parent.openModal();
                    var parentIframe = window.parent.document.getElementById("writecontractiframe")
                    parentIframe.style.minHeight = '600px';
                } else {
                    $('#WalletModalProxyIframeNew').modal('show');
                }
            }
        } catch (err) { }
    }

    function closeModal() {
        try {
            if (window.parent.document.URL.indexOf('writeProxyContract') != -1) {
                parent.closeProxyModal();
            } else {
                var isInIFrame = (window.location != window.parent.location);
                if (isInIFrame) {
                    parent.closeModal();
                } else {
                    $('#WalletModalProxyIframeNew').modal('hide');
                }
            }
        } catch (err) { }
    }

    function write0(method, input) {

        if (isAccount === false) {
            alert("Please connect to your Web3 provider!");

            return;
        }

        $(".write-msg").empty();

        var functiontoCall = 'myContractInstance.methods[\'' + method + '\']';
        var params = [];
        var ctrl = document.querySelectorAll("[name=" + input + "]");
        var inputs = [];

        if (input.indexOf("_proxy") !== -1)
            functiontoCall = 'myProxyContractInstance.methods[\'' + method + '\']';

        for (var i = 0; i < ctrl.length; i++) {
            var type = ctrl[i].getAttribute('data-type');
            var grp = ctrl[i].getAttribute('data-grp');
            var values = [];

            if (ctrl[i].value == '' && grp === null) {
                document.getElementById(input).focus();
                alert('Input value cannot be empty');
                return false;
            }

            // don't trip formatting at all
            var value = ctrl[i].value;

            if (value) {
                if (type.indexOf('[') !== -1 && type.indexOf(']') !== -1) values.push(value.split(','));
                else values.push(value);
            } else values.push('');

            inputs.push({ type: type, value: values, grp: grp });
        }

        var params = encodeParams(inputs);
        //get input number - which is always the second element
        var splitTmp = input.split("_");
        var counter = splitTmp[1];
        var payableAmountInput = document.getElementById("input_payable_" + counter + '_' + method.substring(0, method.lastIndexOf("(")));
        var payableParam = payableAmountInput && !isNaN(payableAmountInput.value) ? ', value: "' + Web3Utils.toWei(payableAmountInput.value, "ether") + '"' : '';

        try {
            new Function(functiontoCall + "(" + params + ").send({ from:'" + eth.defaultAccount + "'" + payableParam + "})" +
                ".on('transactionHash', function(hash) { showTx('', hash, '" + input + "'); })" +
                ".on('error', function(error) { showTx(error, '', '" + input + "') });")();
        } catch (err) {
            showTx(err.message, '', input);
        }

    }

    function encodeParams(values) {
        var params = '';

        if (values.length === 0)
            return "";

        for (i = 0; i < values.length; i++) {
            var param = values[i];

            if (param.value !== '') {
                if (param.grp !== null) {
                    var _grp = values.filter(function (x) { return x.grp == param.grp });
                    var _grpParam = '';

                    for (g = 0; g < _grp.length; g++) {
                        param = _grp[g];

                        if (param.value[0] !== '') {
                            if (g == 0)
                                if (param.type == "tuple" || param.type == "tuple[]") {
                                    _grpParam = param.value[0];
                                } else {
                                    _grpParam = toHex(param.type, Escape(param.value[0]));
                                }
                            else
                            if (param.type == "tuple" || param.type == "tuple[]") {
                                _grpParam = _grpParam + ',' + param.value[0];
                            } else {
                                _grpParam = _grpParam + ',' + toHex(param.type, Escape(param.value[0]));
                            }
                        }
                    }

                    if (i == 0)
                        params += _grpParam;
                    else
                        params += ',' + _grpParam;

                    i += _grp.length - 1;
                }
                else {
                    if (i == 0)
                        if (param.type == "tuple" || param.type == "tuple[]") {
                            params = param.value[0];
                        } else {
                            params = toHex(param.type, Escape(param.value[0]));
                        }
                    else
                    if (param.type == "tuple" || param.type == "tuple[]") {
                        params = params + ',' + param.value[0];
                    } else {
                        params = params + ',' + toHex(param.type, Escape(param.value[0]));
                    }
                }
            }
        }

        return params;
    }

    function Escape(val) {

        if (typeof val === 'string' || val instanceof String)
            return val.replace(/'/g, "\\u0027");
        else
            return val;

    }

    function strip(val) {
        val = val.replace(/"/g, '');
        return val;
    }


    function toHex(type, val) {
        if (type.indexOf('bool') !== -1)
            if (type.indexOf('[') !== -1) {
                return val;
            } else {
                return JSON.parse(val);
            }
        else if (type.indexOf('address') !== -1)
            if (type.indexOf('[') !== -1) {
                // check for address[] - Convenience parsing to wrap with double quotes
                // multidimensional arrays will rely on the user providing the correct input (brackets, double quotes on the correct places)
                var tmp = val.toString().replace("[", "").replace("]", "").split(",");
                var toReturn = "";
                for (var i = 0; i < tmp.length; i++) {
                    if (tmp[i].length == 0)
                        toReturn = toReturn + " ," //let it error
                    else
                        toReturn = toReturn + "'" + add0xforAddress(tmp[i].toString().replace("\"", "").replace("'", "").replace("\"", "").replace("'", "")) + "',"
                }
                toReturn = toReturn.slice(0, -1);
                toReturn = "[" + toReturn + "]";
                return toReturn;
            } else {
                // strip any existing double quotes or single quotes
                val = val.replace("\"", "").replace("'", "");
                // needed to do it twice
                val = val.replace("\"", "").replace("'", "");
                return "'" + add0xforAddress(val) + "'";
            }
        else if (type == 'string')
            // which also means if you double quote your strings, it'll follow suit ;)
            return "'" + val + "'"
        else if (type.indexOf('uint') !== -1)
            if (type.indexOf('[') !== -1) {
                // check for uint[] - Convenience parsing to wrap with double quotes
                // multidimensional arrays will rely on the user providing the correct input (brackets, double quotes on the correct places), exit if it is
                if (type.split(/[[1-9]]/).length == 2) {
                    var tmp = val.toString().replace("[", "").replace("]", "").split(",");
                    var toReturn = "";

                    // specifically handle empty array
                    if (tmp.length == 1) {
                        if (tmp[0].toString() == "") {
                            return "[]";
                        }
                    }

                    for (var i = 0; i < tmp.length; i++) {
                        toReturn = toReturn + "'" + tmp[i].toString() + "',"
                    }
                    toReturn = toReturn.slice(0, -1);
                    toReturn = "[" + toReturn + "]";
                    return toReturn;
                } else {
                    // avoid handling complex data types, rely on user to enter them as appropriate
                    return val;
                }
            }
            else {
                // strip any existing double quotes or single quotes
                val = val.replace("\"", "").replace("'", "");
                // needed to do it twice
                val = val.replace("\"", "").replace("'", "");
                return "'" + val + "'";
            }
        else if (type.indexOf('byte') !== -1)
            if (type.indexOf('[') !== -1) {
                // multidimensional arrays will rely on the user providing the correct input (brackets, double quotes on the correct places), exit if it is
                if (type.split(/[[1-9]]/).length == 2) {
                    var tmp = val.toString().replace("[", "").replace("]", "").split(",");
                    var toReturn = "";

                    // specifically handle empty array
                    if (tmp.length == 1) {
                        if (tmp[0].toString() == "") {
                            return "[]";
                        }
                    }

                    for (var i = 0; i < tmp.length; i++) {
                        toReturn = toReturn + "'" + tmp[i].toString() + "',"
                    }
                    toReturn = toReturn.slice(0, -1);
                    toReturn = "[" + toReturn + "]";
                    return toReturn;
                } else {
                    // avoid handling complex data types, rely on user to enter them as appropriate - including quote wrapping
                    return val;
                }
            }
            else {
                // strip any existing double quotes or single quotes
                val = val.replace("\"", "").replace("'", "");
                // needed to do it twice
                val = val.replace("\"", "").replace("'", "");
                return "'" + val + "'";
            }
        else
            return val
    };

    function showTx(err, msg, input) {

        if (err) {
            var _err = err;
            if (err.message)
                _err = err.message;
            $('.' + input).html("<span class='text-danger'>" + _err.escape() + "</span>");
            var height = $('.' + input).closest(".card-body").height()
            var id = $('.' + input).closest('.writeContractFunction').prev().attr('id');

            var obj = window.parent.document.getElementById(contractframe);
            $(obj).height(($(obj).height() - cardHeightDict[id] + height) + "px");
            cardHeightDict[id] = height;

        } else {
            var _url = 'etherscan.io';

            if (net !== 'mainnet')
                _url = net + ".etherscan.io"


            if (msg !== undefined)
                $('.' + input).html("<a class='btn btn-primary' href='//" + _url + "/tx/" + msg + "' target='_blank'> View your transaction</a>");
        }

    }

    async function connectWeb3(type) {
        var cont = false;
        if ((contractAddress !== undefined) || (net !== undefined)) {
            if (type === 'web3') {
                if (typeof ethereum !== 'undefined') {
                    eth = new Web3Eth(ethereum);
                } else if (typeof web3 !== 'undefined') {
                    eth = new Web3Eth(web3.givenProvider);
                } else {
                    eth = new Web3Eth(new Web3HttpProvider('https://' + net + '.infura.io/v3/dbd67a522fc4476c95ca076ac34d69fc'));
                }
                typeOfLogin = type;
            } else {
                switch (type) {

                    case 'walletConnect':
                        // for walletConnect we need to preemptively close the modal
                        closeModal();

                        // is there a way for us to catch the qrmodal rejection and flush the object? TODO
                        try {

                            var walletConnectEnableTask = walletConnectObj.enable();

                            setTimeout(() => {
                                $(".walletconnect-modal__footer>a").on("click", () => {
                                    alert("Successfully copied to clipboard");
                                })

                            });

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

        if (typeof eth !== 'undefined') {
            var network = 0;

            network = await eth.net.getId();
            netID = network.toString();

            switch (netID) {
                case "1":
                    network = 'mainnet';
                    break;
                case "2":
                    network = 'morden';
                    break;
                case "3":
                    network = 'ropsten';
                    break;
                case "4":
                    network = 'rinkeby';
                    break;
                case "5":
                    network = 'goerli';
                    break;
                case "42":
                    network = 'kovan';
                    break;
                case "246":
                    network = 'ecw';
                    break;
                default:
                    console.log('This is an unknown network.');
            }

            if (network.toLowerCase() !== net.toLowerCase()) {
                alert("Please connect your Web3 to " + net + ' network');
                return false;
            } else {
                if (nonBrowserWallet == true) {
                    getWeb3Accounts();
                    console.log(address);
                } else if (typeof ethereum !== 'undefined') {
                    ethereum.enable().then(function () {
                        getWeb3Accounts();
                    });
                } else {
                    getWeb3Accounts();
                }
            }

            setTimeout(function () {
                if (contractframe == "writeproxycontractiframe") {
                    window.parent.writeProxyContractLoaded = true;
                } else {
                    window.parent.writeContractLoaded = true;
                }

                var obj = window.parent.document.getElementById(contractframe);

                //if (obj !== null) {
                //    parent.resizeIframe(obj, 0);
                //    window.parent.isFrameLoading = false;
                //    window.parent.document.getElementById('overlayMain').style.display = 'none';
                //}

            }, 50);

            closeModal();
        } else {
            alert('Unable to locate a compatible web3 browser!');
        }
    }


    function getWeb3Accounts() {
        eth.getAccounts(function (err, accounts) {
            if (err) alert(err + '. Are you sure you are on a secure (SSL / HTTPS) connection?');

            if (accounts.length > 0) {
                address = accounts[0];
                var isAddress = Web3Utils.isAddress(address);

                if (isAddress) {

                    var msg = 'Please take note that this is a beta version feature and is provided on an "as is" and "as available" basis. Etherscan does not give any warranties and will not be liable for any loss, direct or indirect through continued use of this feature.';

                    if (confirm(msg)) {
                        $('.write-btn').show();
                        $('#connectWeb3').hide();
                        eth.defaultAccount = accounts[0];

                        myContractInstance = new eth.Contract(ABI, contractAddress);

                        if (proxyABI)
                            myProxyContractInstance = new eth.Contract(proxyABI, contractAddress);

                        $('#connector').removeClass("text-danger").addClass("text-success");
                        $('#connector').attr('title', 'Connected');
                        $('#connector').attr('data-toggle-second', 'tooltip');
                        $("[data-toggle-second='tooltip']").tooltip();
                        $('.write-btn').removeClass("disabled");

                        var connectorID = document.getElementById('connectStatus');
                        var strAddressHyperlink;

                        if (net == 'mainnet') {
                            strAddressHyperlink = "https://etherscan.io/address/" + address;
                        } else {
                            strAddressHyperlink = "https://" + net + ".etherscan.io/address/" + address;
                        }

                        connectorID.innerHTML = connectorID.innerHTML.replace("Connect to Web3", "Connected - " + typeOfLogin.charAt(0).toUpperCase() + typeOfLogin.slice(1) + ' [<u>' + address.substring(0, 6) + '....' + address.substring(address.length - 4) + '</u>]');
                        connectorID.setAttribute('onclick', 'window.open("' + strAddressHyperlink + '","_blank"); return false;');
                        connectorID.outerHTML = connectorID.outerHTML.replace("btn-secondary", "btn-primary");
                        connectorID.removeAttribute('href');
                    }

                    isAccount = true;
                }
            } else {
                alert('Please connect to your Web3 provider!');
            }
        });
    }

    function add0xforAddress(_address) {
        _address = _address.trim();
        if (_address.startsWith("0x") == false && _address.length == 40) {
            _address = "0x" + _address;
        }
        return _address;
    }

    function getUrlParameter(sParam) {
        var sPageURL = decodeURIComponent(window.location.search.substring(1)),
            sURLVariables = sPageURL.split('&'),
            sParameterName,
            i;

        for (i = 0; i < sURLVariables.length; i++) {
            sParameterName = sURLVariables[i].split('=');

            if (sParameterName[0] === sParam) {
                return sParameterName[1] === undefined ? true : sParameterName[1];
            }
        }
    }


    setTimeout(function () {
        if (contractframe == "writeproxycontractiframe") {
            window.parent.writeProxyContractLoaded = true;
        } else {
            window.parent.writeContractLoaded = true;
        }
        var obj = window.parent.document.getElementById(contractframe);

        if (obj !== null) {
            //parent.resizeIframe(obj, 0);
            window.parent.isFrameLoading = false;
            window.parent.document.getElementById('overlayMain').style.display = 'none';
        }

    }, 50);

    function getParameterByName(name) {
        var url = window.location.href;
        name = name.replace(/[\[\]]/g, "\\$&");
        var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
            results = regex.exec(url);
        if (!results) return null;
        if (!results[2]) return '';
        return decodeURIComponent(results[2].replace(/\+/g, " "));
    }

    $(document).ready(function () {
        $(window).keydown(function (event) {
            if (event.keyCode == 13) {
                event.preventDefault();
                return false;
            }
        });

        $("#txtCustom").keypress(function (e) {
            //if the letter is not digit then don't type anything
            if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
                return false;
            }

            if ($("#txtCustom").val().length == 2) {
                return false;
            }
        });
    });
</script>
</html>
