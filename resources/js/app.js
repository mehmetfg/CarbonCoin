import ReactDOM from "react-dom";

import Sale from "./components/TransferList"
import {Provider} from "react-redux";
import store from "./store/index";
require('./bootstrap');

require('alpinejs');


ReactDOM.render(
    <Provider store={store}>
    <Sale/>
    </Provider>,
    document.getElementById("root"));
