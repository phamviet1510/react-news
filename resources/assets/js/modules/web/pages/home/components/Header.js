import React from "react"

const displayName = "HomePageHeader"

function Header() {
  return <header className="bg-primary text-white">
    <div className="container text-center">
      
      <h1>MrVietPT</h1>
      
      <p className="lead">React Developer &nbsp;</p>
      <p className="lead"><i className="fa fa-heart text-danger" />{`{ PHP, JavaScript, Python, MySQL, MongoDB, *** }`}</p>
    </div>
  </header>
}
Header.displayName = displayName

export default Header
