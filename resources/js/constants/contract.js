export const CYCE_CONTRACT={
    1:{
        address: '0xeadd9b69f96140283f9ff75da5fd33bcf54e6296',
        symbol: 'CYCE',
        decimals: '6',
        image: '',
        abi: [{inputs: [], stateMutability: "payable", type: "constructor"}, {
            anonymous: false,
            inputs: [{indexed: true, internalType: "address", name: "tokenOwner", type: "address"}, {
                indexed: true,
                internalType: "address",
                name: "spender",
                type: "address"
            }, {indexed: false, internalType: "uint256", name: "tokens", type: "uint256"}],
            name: "Approval",
            type: "event"
        }, {
            anonymous: false,
            inputs: [{indexed: true, internalType: "address", name: "from", type: "address"}, {
                indexed: true,
                internalType: "address",
                name: "to",
                type: "address"
            }, {indexed: false, internalType: "uint256", name: "tokens", type: "uint256"}],
            name: "Transfer",
            type: "event"
        }, {
            inputs: [],
            name: "_totalSupply",
            outputs: [{internalType: "uint256", name: "", type: "uint256"}],
            stateMutability: "view",
            type: "function"
        }, {
            inputs: [{internalType: "address", name: "tokenOwner", type: "address"}, {
                internalType: "address",
                name: "spender",
                type: "address"
            }],
            name: "allowance",
            outputs: [{internalType: "uint256", name: "remaining", type: "uint256"}],
            stateMutability: "view",
            type: "function"
        }, {
            inputs: [{internalType: "address", name: "spender", type: "address"}, {
                internalType: "uint256",
                name: "tokens",
                type: "uint256"
            }],
            name: "approve",
            outputs: [{internalType: "bool", name: "success", type: "bool"}],
            stateMutability: "nonpayable",
            type: "function"
        }, {
            inputs: [{internalType: "address", name: "tokenOwner", type: "address"}],
            name: "balanceOf",
            outputs: [{internalType: "uint256", name: "balance", type: "uint256"}],
            stateMutability: "view",
            type: "function"
        }, {
            inputs: [{internalType: "uint256", name: "_amount", type: "uint256"}],
            name: "burn",
            outputs: [{internalType: "bool", name: "", type: "bool"}],
            stateMutability: "nonpayable",
            type: "function"
        }, {
            inputs: [],
            name: "decimals",
            outputs: [{internalType: "uint8", name: "", type: "uint8"}],
            stateMutability: "view",
            type: "function"
        }, {
            inputs: [{internalType: "uint256", name: "_amount", type: "uint256"}],
            name: "mint",
            outputs: [{internalType: "bool", name: "", type: "bool"}],
            stateMutability: "nonpayable",
            type: "function"
        }, {
            inputs: [],
            name: "name",
            outputs: [{internalType: "string", name: "", type: "string"}],
            stateMutability: "view",
            type: "function"
        }, {
            inputs: [],
            name: "owner",
            outputs: [{internalType: "address", name: "", type: "address"}],
            stateMutability: "view",
            type: "function"
        }, {
            inputs: [],
            name: "symbol",
            outputs: [{internalType: "string", name: "", type: "string"}],
            stateMutability: "view",
            type: "function"
        }, {
            inputs: [],
            name: "totalSupply",
            outputs: [{internalType: "uint256", name: "", type: "uint256"}],
            stateMutability: "view",
            type: "function"
        }, {
            inputs: [{internalType: "address", name: "to", type: "address"}, {
                internalType: "uint256",
                name: "tokens",
                type: "uint256"
            }],
            name: "transfer",
            outputs: [{internalType: "bool", name: "success", type: "bool"}],
            stateMutability: "nonpayable",
            type: "function"
        }, {
            inputs: [{internalType: "address", name: "from", type: "address"}, {
                internalType: "address",
                name: "to",
                type: "address"
            }, {internalType: "uint256", name: "tokens", type: "uint256"}],
            name: "transferFrom",
            outputs: [{internalType: "bool", name: "success", type: "bool"}],
            stateMutability: "nonpayable",
            type: "function"
        }]
    },

    2: {
        address: '0xb51878Ce978427F6a4b847D80E47FDFB3958186a',
        abi: [{"inputs":[{"internalType":"address","name":"_cyceToken","type":"address"},{"internalType":"address","name":"_weth","type":"address"},{"internalType":"address","name":"_factory","type":"address"},{"internalType":"address","name":"_usd","type":"address"}],"stateMutability":"nonpayable","type":"constructor"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"previousOwner","type":"address"},{"indexed":true,"internalType":"address","name":"newOwner","type":"address"}],"name":"OwnershipTransferred","type":"event"},{"anonymous":false,"inputs":[{"indexed":false,"internalType":"address","name":"user","type":"address"},{"indexed":false,"internalType":"uint256","name":"amount","type":"uint256"}],"name":"purchase","type":"event"},{"inputs":[],"name":"WETH","outputs":[{"internalType":"address","name":"","type":"address"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"buyToken","outputs":[],"stateMutability":"payable","type":"function"},{"inputs":[],"name":"cyceToken","outputs":[{"internalType":"address","name":"","type":"address"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"geUnlockTime","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"getUSDValue","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"uint256","name":"time","type":"uint256"}],"name":"lock","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[],"name":"owner","outputs":[{"internalType":"address","name":"","type":"address"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"renounceOwnership","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"","type":"address"}],"name":"tokenList","outputs":[{"internalType":"address","name":"","type":"address"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"newOwner","type":"address"}],"name":"transferOwnership","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[],"name":"uniswapFactory","outputs":[{"internalType":"contract IUniswapV2Factory","name":"","type":"address"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"unlock","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[],"name":"usdPair","outputs":[{"internalType":"address","name":"","type":"address"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"withdraw","outputs":[],"stateMutability":"nonpayable","type":"function"}]
    }
}


