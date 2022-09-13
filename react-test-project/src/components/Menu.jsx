import React from "react";

import {Routes, Route, NavLink} from 'react-router-dom';

import Page_1 from "./Pages/Page_1";
import Page_2 from "./Pages/Page_2";

function Menu(){
    return(
        <div className="Menu">
            
            <div className="wrap">

                <p><NavLink to="page1">page1</NavLink></p>
                <p><NavLink to="page2">page2</NavLink></p>

                <Routes>
                    <Route path="page1" element={<Page_1/>}/>
                    <Route path="page2" element={<Page_2/>}/>       
                </Routes>
                
            </div>

        </div>
    );
}
export default Menu;