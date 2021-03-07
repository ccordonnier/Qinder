import React from "react";
import axios from "axios";


class Ranking extends React.Component {
    state = {
        max: 8,
        ranking: [

        ]
    }

    getRanking = (max) => {
        axios.get(`http://qinder.test/src/api/controller.php?action=getRanking&max=` + max)
            .then(res => {
                const ranking = res.data;
                this.setState({ ranking });
            })
    }

    handleViewMore = () => {
        const max = this.state.max + 8;
        this.setState({ max });
        this.getRanking(this.state.max);
    }



    componentDidMount() {
        this.getRanking(this.state.max);
    }

    render() {
        return <div>
            <div className="row">
                {this.state.ranking.map(q => (

                    <div className="col col-md-3" >
                        <div className="card">
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
                    <button onClick={this.handleViewMore}>Je veux plus de Q</button>
                </div>
            </div>
        </div>

    }
}

export default Ranking;