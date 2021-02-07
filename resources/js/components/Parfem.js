import React, { Component } from "react";
import ReactDOM from "react-dom";

export default class Parfem extends Component {
    constructor(props) {
        super(props);

        this.state = {
            parfem: this.props.parfem,
            izmenaCene: false,
            novaCena: ""
        };
    }

    pozoviFormuZaIzmenu() {
        this.setState({ izmenaCene: !this.state.izmenaCene });
    }
    formaIzmena() {
        if (this.state.izmenaCene) {
            return (
                <input
                    placeholder="Nova cena"
                    onChange={this.izmenaCene.bind(this)}
                ></input>
            );
        }
    }

    izmenaCene(e) {
        this.setState({ novaCena: e.target.value });
    }

    handleIzmenaCene() {
        console.log(this.state.novaCena);
        axios
            .put("http://127.0.0.1:8000/parfem/izmena", {
                id: this.state.parfem.id,
                cena: 47754
            })
            .then(res => {
                if (res.data.message === true) {
                    let parfem = this.state.parfem;
                    parfem.cena = this.state.novaCena;
                    this.setState({ parfem });
                }
            });
    }

    obrisiParfem() {
        axios
            .delete(
                "http://127.0.0.1:8000/parfem/brisanje?id=" +
                    this.state.parfem.id
            )
            .then(res => {
                if (res.data.message === true) {
                    this.props.onDelete(this.state.parfem.id);
                }
            });
    }

    render() {
        return (
            <tr>
                <td>{this.state.parfem.model}</td>
                <td>{this.state.parfem.cena}</td>
                <td><img src="{this.state.parfem.slika}"></img></td>
                <td>
                    <button
                        onDoubleClick={this.obrisiParfem.bind(this)}
                        className="btn btn-warning"
                    >
                        Brisanje
                    </button>
                    <button
                        onDoubleClick={this.handleIzmenaCene.bind(this)}
                        onClick={this.pozoviFormuZaIzmenu.bind(this)}
                        className="btn btn-primary"
                    >
                        Izmeni cenu
                    </button>
                    {this.formaIzmena()}
                </td>
            </tr>
        );
    }
}

if (document.getElementById("parfemi")) {
    ReactDOM.render(<Parfem />, document.getElementById("parfemi"));
}
