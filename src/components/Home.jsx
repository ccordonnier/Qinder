import React from "react";
import { Link } from "react-router-dom";
import RandomQ from "./RandomQ";

function Home() {
    return (
        <div className="container">
            <div className="card rounded-bottom">
                <div className="card-body">
                    <h1 className="card-title">Le meilleur site de Q du <span class="underline">monde</span></h1>
                    <p className="card-text">On est un peu obsédés par les Q, du coup on a décidé de créer un site dédié à ça.<br />
                        On espère que vous aimerez tout autant que nous. Cliquez sur le bouton et découvrez des Q du monde entier, et votez pour vos préférés!</p>
                </div>
            </div>
            <div className="row">
                <div className="col-md-6 offset-md-3 col-sm-12">
                    <RandomQ />
                </div>
            </div>
            <div className="col-md-6 offset-md-3 col-sm-12">
                <Link class="nav-link" to="/">
                    <center>
                        <button className="btn-bottom">Envoyez nous votre Q à tulasvumonq@sitedeq.fr</button>
                    </center>
                </Link>
                <Link class="nav-link" to="/ranking">
                    <center>
                        <button className="btn-bottom">Le classement qui pue pas du Q</button>
                    </center>
                </Link>
            </div>
        </div>
    );
}

export default Home;