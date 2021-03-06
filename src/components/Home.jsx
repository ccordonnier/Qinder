import React from "react";
import { Link, withRouter } from "react-router-dom";
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
                <div className="col-md-6 offset-md-3">
                    <RandomQ />
                </div>
            </div>
            <div className="col-md-4 offset-md-4">

            </div>
        </div>
        /*<div className="home">
                <div class="container">
                    <div class="row align-items-center my-5">
                        <div class="col-lg-7">
                            <img
                                class="img-fluid rounded mb-4 mb-lg-0"
                                src="http://placehold.it/900x400"
                                alt=""
                            />
                        </div>
                        <div class="col-lg-5">
                            <h1 class="font-weight-light">Home</h1>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry. Lorem Ipsum has been the industry's standard dummy text
                                ever since the 1500s, when an unknown printer took a galley of
                                type and scrambled it to make a type specimen book.
            </p>
                        </div>
                    </div>
                </div>
            </div>*/
    );
}

export default Home;