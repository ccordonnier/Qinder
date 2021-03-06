import React from "react";
import axios from "axios";
import { AiOutlineDislike, AiOutlineLike } from "react-icons/ai";

class RandomQ extends React.Component {
  state = {
    Q: {
      id: 0,
      url: "",
      likes: 0,
      dislikes: 0,
    },
  };

  handleLikeClick = () => {
    const id = this.state.Q.id;
    axios
      .get(
        `https://qinder-api.corentincordonnier.fr/controller.php?action=addLike&id=` +
          id
      )
      .then((res) => {
        console.log(res);
        const Q = res.data;
        this.setState({ Q });
      });
  };

  handleDislikeClick = () => {
    const id = this.state.Q.id;
    axios
      .get(
        `https://qinder-api.corentincordonnier.fr/controller.php?action=addDislike&id=` +
          id
      )
      .then((res) => {
        console.log(res);
        const Q = res.data;
        this.setState({ Q });
      });
  };

  componentDidMount() {
    axios
      .get(
        `https://qinder-api.corentincordonnier.fr/controller.php?action=getRandomQ`
      )
      .then((res) => {
        console.log(res);
        const Q = res.data;
        this.setState({ Q });
      });
  }

  render() {
    return (
      <div className="row align-items-center">
        <div className="col-md-2 col-like">
          <button
            onClick={this.handleLikeClick}
            className="btn btn-outline-success btn-like"
          >
            <AiOutlineLike />
          </button>
        </div>
        <div className="col-md-8 col-card">
          <div className="card Qcard">
            <div className="card-body numberImage">
              <span>#{this.state.Q.id}</span>
              <span className="badge rounded-pill bg-success nbLikes">
                {this.state.Q.likes}
              </span>
              <span className="badge rounded-pill bg-danger nbDislikes">
                {this.state.Q.dislikes}
              </span>
            </div>
            <div className="row">
              <div className="col-lg-12 imgQ">
                <img src={this.state.Q.url} alt="" />
              </div>
            </div>
          </div>
        </div>
        <div className="col-md-2 col-dislike">
          <button
            onClick={this.handleDislikeClick}
            className="btn btn-outline-danger btn-dislike"
          >
            <AiOutlineDislike />
          </button>
        </div>
      </div>
    );
  }
}

export default RandomQ;
