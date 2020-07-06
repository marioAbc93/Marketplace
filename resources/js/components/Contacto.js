import React from 'react';
import ReactDOM from 'react-dom';

function Contacto() {
    return (
        <div className="container">
            <div className="row justify-content-center">
                <div className="col-md-8">
                    <div className="card">
                        <div className="card-header">Example Component</div>

                        <div className="card-body">I'm an example component!</div>
                    </div>
                </div>
            </div>
        </div>
    );
}

export default Contacto;

if (document.getElementById('contacto')) {
    ReactDOM.render(<Contacto />, document.getElementById('contacto'));
}
