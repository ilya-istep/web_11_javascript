import logo from './logo.svg';
import React, { useState } from 'react';
// import './App.css';

let data = [];

function App(props) {

  const [myNumber, setmyNumber] = useState(13);

  let f = () => {
    data.push(el.current.value);
    el.current.value ="";
    console.log(data);
  
    // props.olegRender();
  }
  
  let el = React.createRef();
  let p = React.createRef();

  let pClick = () => {
    // p.current.value = 5;

    setmyNumber(myNumber + 5);
  }

  return (
    <div className="App">

      <p onClick={pClick} ref={p}>{myNumber}</p>

      <input type="text" ref={el}/>

      <button onClick = { f }>нажми меня</button>

      <ul>
      {
        data.map((el, index)=>
          <li key={index}>{el}</li>
        )
      }
      </ul>

    </div>
  );
}

export default App;
