import React, { Component } from "react";
import ReactDOM from "react-dom";
import Parfem from "./Automobil";
import Forma from "./Forma";

export default class Kompanija extends Component {
    constructor(props) {
        super(props);

        this.state = {
            kompanija: this.props.kompanija,
            prikazaniParfemi: false,
            prikazForme: false
        };
        this.onDeleteParfemi = this.onDeleteParfemi.bind(this);
        this.prikazParfema = this.prikazParfema.bind(this);
        this.prikazForme = this.prikazForme.bind(this);
        this.displayParfeiKompanije = this.displayParfeiKompanije.bind(
            this
        );
    }

    prikazParfema() {
        this.setState({ prikazaniParfemi: !this.state.prikazaniParfemi });
    }
    prikazForme() {
        this.setState({ prikazForme: !this.state.prikazForme });
    }

    displayParfeiKompanije() {
        if (this.state.prikazaniParfemi)
            return (
                <table className="table table-border table-dark">
                    <thead>
                        <tr>
                            <th style={{ width: "20%" }} scope="col-2">
                                Model
                            </th>
                            <th style={{ width: "20%" }} scope="col-3">
                                Cena
                            </th>
                            <th style={{ width: "20%" }} scope="col-2">
                                Slika
                            </th>
                            <th scope="col-5">Akcije</th>
                        </tr>
                    </thead>
                    <tbody>
                        {!this.state.prikazForme ? (
                            this.state.kompanija.parfemi.map(a => {
                                return (
                                    <Parfem
                                        onDelete={this.onDeleteParfemi}
                                        key={a.id}
                                        parfem={a}
                                    />
                                );
                            })
                        ) : (
                            <Forma
                                key={this.state.kompanija.id}
                                kompanijaID={this.state.kompanija.id}
                            />
                        )}
                    </tbody>
                </table>
            );
    }
    onDeleteParfem(id) {
        this.setState(stariState => {
            let parfemi = stariState.kompanija.parfemi.filter(
                a => a.id != id
            );
            let kompanija = stariState.kompanija;
            kompanija.broj_parfema--;
            kompanija.parfemi = parfemi;
            return { kompanija: kompanija };
        });
    }
    render() {
        return (
            <div className="container ">
                <div className="row d-flex justify-content-center">
                    <h5
                        style={{ cursor: "pointer" }}
                        onClick={this.prikazParfema}
                        onDoubleClick={this.prikazForme}
                    >
                        {" "}
                        {this.state.kompanija.naziv_kompanija}
                    </h5>
                </div>

                <div className="row ">{this.displayParfeiKompanije()}</div>
            </div>
        );
    }
}

if (document.getElementById("kompanija")) {
    ReactDOM.render(<Kompanija />, document.getElementById("kompanija"));
}
