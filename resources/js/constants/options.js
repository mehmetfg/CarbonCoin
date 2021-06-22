import WalletConnectProvider from "@walletconnect/web3-provider";
import Fortmatic from "fortmatic";

export const PROVIDER_OPTIONS= {
    walletconnect: {
        package: WalletConnectProvider,
        options: {
            // Mikko's test key - don't copy as your mileage may vary
            infuraId: "89a1a674afc246438074d9511e192823",
        }
    },

    fortmatic: {
        package: Fortmatic,
        options: {
            // Mikko's TESTNET api key
            key: "pk_test_391E26A3B43A3350"
        }
    }
}

export const GAS_LIMIT=85000
export const DENOMINATIONS={
    gwei:1000000000,

}
