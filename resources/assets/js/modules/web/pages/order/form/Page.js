import React, { Component } from "react"
// import PropTypes from "prop-types"


class Page extends Component {
  static displayName = "OrderForm"
  // static propTypes = {
  //   dispatch: PropTypes.func.isRequired,
  // }
    constructor(props) {
        super(props);
        this.state = {value: '', text: ''};

        this.handleChange = this.handleChange.bind(this);
        this.handleSubmit = this.handleSubmit.bind(this);
    }

    handleChange(event) {
        this.setState({value: event.target.value});
    }

    handleSubmit(event) {
        // alert('A name was submitted: ' + this.state.value);
        this.setState({text: this.state.value});

        event.preventDefault();
    }

    render() {
    return <div>
        <section id="components-articles">
          <div className="container">
            <div className="row">
                <form onSubmit={this.handleSubmit} className={`bd-example`}>
                    <div className="col-sm-6">
                        <div className="form-group row">
                            {/*<label htmlFor="title" className="col-sm-2 col-form-label">Duong dan</label>*/}
                            <div className="col-sm-12 ">
                            <textarea
                                className={`form-control`}
                                name="links"
                                placeholder="Đường dẫn"
                                value={this.state.value}
                                onChange={this.handleChange}
                                rows="6"
                            >
                            </textarea>
                            </div>
                        </div>
                        <div className="form-group row">
                            <div className="col-sm-12 ml-auto text-right">
                                <button disabled="" type="submit" className="btn btn-primary">Find</button>
                            </div>
                        </div>
                    </div>
                    <div className="col-sm-6">
                        <div id="result">{this.state.text}</div>
                    </div>

                </form>
            </div>
          </div>
        </section>
      </div>
    }
}

export default Page
