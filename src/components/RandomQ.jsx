import React from "react";
import axios from "axios";

class RandomQ extends React.Component {
    state = {
        Q: {
            id: 0,
            url: "",
            likes: 0,
            dislikes: 0
        }

    }

    handleLikeClick = () => {
        const likes = this.state.likes;
        const id = this.state.id;
        axios.get(`http://qinder.test/src/api/controller.php?action=addLikes&id=` + id)
            .then(res => {
                console.log(res);
                const Q = res.data;
                this.setState({ Q });
            })
    }

    componentDidMount() {
        axios.get(`http://qinder.test/src/api/controller.php?action=getRandomQ`)
            .then(res => {
                console.log(res);
                const Q = res.data;
                this.setState({ Q });
            })
    }


    render() {
        return <div className="row align-items-center">
            <div className="col-md-2">
                <button className="btn btn-success">Like</button>
            </div>
            <div className="col-md-8">
                <div className="card">
                    <img className="rounded" src={this.state.Q.url} alt="" />
                </div>
            </div>
            <div className="col-md-2">
                <button className="btn btn-danger">Dislike</button>
            </div>
        </div>
    }

}

export default RandomQ;