import React, { Component } from "react"
import PropTypes from "prop-types"

// import components
// import Header from "./components/Header"

class Page extends Component {
  static displayName = "HomePage"
  static propTypes = {
    dispatch: PropTypes.func.isRequired,
  }

  render() {
    return <div>
      ahihi
    </div>
  }
}

export default Page
