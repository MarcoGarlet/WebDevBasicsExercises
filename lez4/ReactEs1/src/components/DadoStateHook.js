import { useState } from 'react';

export default function DadoNew() {
    const [faccia, setFaccia] = useState(0);

    function lancio(){
        setFaccia(Math.round(Math.random()*5)+1);
    }
    
    return (
    <>
        <p>{faccia!==0?faccia:"Lancia il dado facendo click sul pulsante"}</p>
        <button onClick={lancio}>
            Lancia il Dado
        </button>
    </>
    )
}