import React, { useEffect, useRef} from 'react'
import PropTypes from 'prop-types';
import VanillaTilt from "vanilla-tilt";


const Tilt = ({ children, options, ...rest}) => {

    const elm = useRef()

    useEffect((e) => {
        new VanillaTilt(elm.current, { ...options})
    }, [options, elm])

    return (
        <div ref={elm}  style={{position: 'relative', zIndex: 5}} {...rest}>
            {children}
        </div>
    )
}


export default Tilt

Tilt.propTypes = {
    options: PropTypes.object
}

Tilt.defaultProps = {
    options: {
        max: 30,
        speed: 1800,
        perspective: 800,
        glare: false
    }
}



