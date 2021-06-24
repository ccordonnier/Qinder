import React from "react";
import axios from "axios";


class Ranking extends React.Component {
    state = {
        max: /Android|webOS|iPhone|iPad|Mac|Macintosh|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ? 4 : 8,
        ranking: [

        ]
    }

    getRanking = (max) => {

        axios.get(`https://qinder-api.corentincordonnier.fr/controller.php?action=getRanking&max=` + max)
            .then(res => {
                const ranking = res.data;
                this.setState({ ranking });
            })
    }

    handleViewMore = () => {
        const max = /Android|webOS|iPhone|iPad|Mac|Macintosh|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ? this.state.max + 4 : this.state.max + 8;
        this.setState({ max });
        this.getRanking(max);
    }



    componentDidMount() {
        this.getRanking(this.state.max);
    }

    render() {
        return <div>
            <div className="row rank">
                {this.state.ranking.map(q => (

                    <div className="col-md-3 col-sm-6" >
                        <div className="card m-2">
                            <div className="card-body numberImage">
                                <span>#{q.id}</span>
                                <span className="badge rounded-pill bg-success nbLikes">{q.likes}</span>
                                <span className="badge rounded-pill bg-danger nbDislikes">{q.dislikes}</span>
                            </div>
                            <img className="rounded" src={q.url} alt="" />
                        </div>
                    </div>
                ))
                }

            </div >
            <div className="row">
                <div className="col-md-4 offset-md-4 col-sm-12">
                    <center>
                        <button className="btn-bottom" onClick={this.handleViewMore}>Je veux plus de Q</button>
                    </center>
                </div>
            </div>
        </div>

    }
}

export default Ranking;