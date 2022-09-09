import React from 'react'

function Card({image, name}) {
  return (
    <div style={{
        backgroundColor: "white",
        width: "200px",
        height: "200px",
        borderRadius: "5px",
        boxShadow: "2px 2px 10px black",
        display: "flex",
        flexDirection: "column",
        justifyDontent: "center",
        alignItems: "center",
        paddingBottom: "10px",
        paddingTop: "10px",
        margin: "10px",
        position:"relative",
        
    }}>
        <style>

</style>
        <img src={image} alt="poke" 
        style={{
            objectFit: "contain",
            overflow:"hiden",
            borderRadius:"5px",
            maxHeight:"200px"
        }}/>
        <h2 style={{
            position:"relative",
            top:"-225px",
        }}>{name}</h2>
    </div>
  )
}

export default Card