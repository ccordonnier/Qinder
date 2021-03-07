import React from "react";
import { Link, withRouter } from "react-router-dom";
import Ranking from "./Ranking";

function Classement() {
    return (
        <div className="container">
            <div className="card rounded-bottom">
                <div className="card-body">
                    <h1 className="card-title">Le classement des meilleurs Q.</h1>
                    <p className="card-text">Des gros Q, des petits Q, des Q colorés, des Q bizarres ... Tous les Q, sur un seul site.<br />
                        Voici le classement. On espère que vous aimez car on s'est vraiment cassé le Q à le faire. Enjoy!</p>
                </div>
            </div>
            <div className="row">
                <div className="col-md-12">
                    <Ranking />
                </div>
            </div>
            <div className="col-md-6 offset-md-3">

                <Link class="nav-link" to="/">
                    <button>Je veux voter</button>
                </Link>
            </div>
        </div>
    );
}

export default Classement;