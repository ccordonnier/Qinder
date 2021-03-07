import React from "react";
import { BrowserRouter as Router, Route, Switch } from "react-router-dom";
import { Home, Classement, Contact } from "./components";
function App() {
  return (
    <div className="App">
      <Router>
        <Switch>
          <Route path="/" exact component={() => <Home />} />
          <Route path="/ranking" exact component={() => <Classement />} />
          <Route path="/contact" exact component={() => <Contact />} />
        </Switch>

      </Router>
    </div>
  );
}

export default App;
