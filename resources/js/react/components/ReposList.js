import React, {useEffect, useState} from 'react'
import { render } from 'react-dom'
import RepoItem from "./RepoItem";

const ReposList = () => {

    const [repos, setRepos] = useState([])

    const getRepos = async () => {
        try {
            let response = await axios.get('https://api.github.com/users/designbycode/repos')
            await setRepos(response.data)
        } catch (e) {}
    }

    useEffect(() => {
        getRepos()
    }, [getRepos])


    return (
        <div className="row">
            {
                repos && repos.map((repo, index) => (
                    <div key={index} className="sm-col-6 md-col-4">
                        <RepoItem repo={repo}/>
                    </div>
                ))
            }
        </div>
    )
}

export default ReposList

const reposElement = document.getElementById('repos')

if (reposElement) {
    render(<ReposList/>, reposElement)
}
