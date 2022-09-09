import React from 'react';
import Card from './Card';

const pika = 'https://assets.puzzlefactory.com/puzzle/254/191/original.jpg';

const bulbasaur = 'https://shop7.webmodule.prestashop.net/pokedoge/11263-large_default/bulbasaur.jpg';

const charmander = 'https://oyster.ignimgs.com/mediawiki/apis.ign.com/pokemon-blue-version/d/d4/Charmander.gif'

function Pokemon() {
  return (
    <div style={{
        height:"100vh",
        display:"flex",
        alignItems:"center",
        flexDirection:"column",
    }}>
        <div>
        <h1> Pokemon</h1>
        </div>

        <div style={{
        display:"flex",
        justifyContent:"center",
        flexDirection:"row",
    }}>
        <Card image={pika} name={"Pikachu"}/>
        <Card image={bulbasaur} name={"Bulbasaur"}/>
        <Card image={charmander} name={"Charmander"}/>
        </div>

    </div>
  )
}

export default Pokemon

