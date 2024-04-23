import React from 'react';

import welcomeImg from '../img/welcomeD.jpg';
export default class Dado extends React.Component{
    constructor(props){
        super(props);
        this.state = {numero:"0"};
    }
    estrazione(){
        return Math.round(Math.random()*5)+1;
    }
    lancio(){
        this.setState({numero: this.estrazione()});
    }
    render(){
        let valore;
        if (parseInt(this.state.numero) == 0){
            valore = <img src={welcomeImg} style={{maxWidth:'20%'}}/>;
        } else{
            valore = <div>{this.state.numero}</div>
        }
        return <div><p>{valore}</p><button onClick={ ()=>this.lancio()  }>Lancia il Dado</button></div>
    }
}