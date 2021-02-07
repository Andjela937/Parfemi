import React, { Component } from "react";
import ReactDOM from "react-dom";

export default class Forma extends Component {
    constructor(props) {
        super(props);

        this.state = {
            ccena: "",
            model: "",
            slika: "",
            kompanija_id: this.props.kompanijaID
        };
    }

    handleDodavanjeParfema() {
        axios
            .post("http://127.0.0.1:8000/parfemi/dodavanje", {
                model: this.state.model,
                cena: this.state.cena,
                slika: this.state.slika,
                kompanija_id: this.state.kompanija_id
            })
            .then(res => {});
        location.reload();
    }

    noviParfemModel(e) {
        this.setState({ model: e.target.value });
    }
    noviParfemCena(e) {
        this.setState({ cena: e.target.value });
    }
    noviParfemSlika(e) {
        this.setState({ slika: e.target.value });
    }

    render() {
        return (
            <tr>
                <td>
                    <input
                        onChange={this.noviParfemModel.bind(this)}
                        placeholder="Model"
                    ></input>
                </td>
                <td>
                    <input
                        onChange={this.noviParfemCena.bind(this)}
                        placeholder="Cena (RSD)"
                    ></input>
                </td>
                <td>
                    <input
                        onChange={this.noviParfemSlika.bind(this)}
                        placeholder="Slika"
                    ></input>
                </td>
                <td>
                    <button
                        onClick={this.handleDodavanjeParfema.bind(this)}
                        className="btn btn-success"
                    >
                        Dodaj parfem
                    </button>
                </td>
            </tr>
        );
    }
}

if (document.getElementById("forma")) {
    ReactDOM.render(<Forma />, document.getElementById("forma"));
}
