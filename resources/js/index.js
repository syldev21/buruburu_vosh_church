import ReactDOM from "react-dom";
import Example from "./components/Example";
import App from './components/App'

if (document.getElementById('voshMembers')) {
    ReactDOM.render(<App />, document.getElementById('voshMembers'));
}
