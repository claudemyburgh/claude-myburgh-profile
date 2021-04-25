import React from 'react'
import { render } from "react-dom";

const PostCreate = () => {
    return (
        <>
            <h1>Create Post</h1>
        </>
    )
}

export default PostCreate


const createPost = document.getElementById('create-post')

if (createPost) {
    render(<PostCreate/>, createPost)
}
