import React from 'react';

import welcomeImg from '../img/welcomeD.jpg';
import primaF from '../img/primaFaccia.jpg';
import secondaF from '../img/secondaFaccia.jpg';
import terzaF from '../img/terzaFaccia.jpg';
import quartaF from '../img/quartaFaccia.jpg';
import quintaF from '../img/quintaFaccia.jpg';
import sestaF from '../img/sestaFaccia.jpg';

const sides = [primaF,secondaF,terzaF,quartaF,quintaF,sestaF];  
export default class Dado extends React.Component{
    constructor(props){
        super(props);
        this.state = {numero:0};
    }
    estrazione(){
        return Math.round(Math.random()*5)+1;
    }
    lancio(){
        this.setState({numero: this.estrazione()});
    }
    render(){
        let welcome = <img src={welcomeImg} style={{maxWidth:'20%'}}/>;
        let esito = this.state.numero;
        if(esito != 0){
            esito =  <img src={sides[esito-1]} style={{maxWidth:'20%'}}/>;
        }
        let valore = (this.state.numero == 0)?<div/>: <div>{esito}</div>
        return <div><p>{welcome}</p><p>{valore}</p><button onClick={ ()=>this.lancio()  }>Lancia il Dado</button></div>
    }
}