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

    /*componentDidMount() {
        axios.get(`../../../Qinder/controler.php`)
            .then(res => {
                const Q = res.data;
                this.setState({ Q });
            })
    }*/


    render() {
        return <div className="card">
            <img class="rounded" src="https://cdn.dribbble.com/users/2984909/screenshots/6375612/q_logo-01_4x.jpg" alt="" />
        </div>
    }

}

export default RandomQ;