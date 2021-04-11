import React from 'react'

const RepoItem = ({repo}) => {
    return (
        <div className="panel package shadow--1 shadow--6:hover">
            <div className="panel__body package__header">
                <div className="package__avatar">
                    <div style={{height: 28, width: 28}} className="avatar">
                        <img src={repo.owner.avatar_url} alt={repo.name}/>
                    </div>
                </div>
                <div className="package__ellipsis">
                    <a href="#">
                        {repo.full_name}
                    </a>
                </div>
                <div className="package__badges">
                    <a className="mr-2" target="_blank" href={`https://github.com/${repo.full_name}/blob/1.x/LICENSE`}>
                        <img alt="GitHub license" src={`https://img.shields.io/github/license/${repo.full_name}`}/>
                    </a>
                    <img className="mr-2"  src={`https://img.shields.io/github/downloads/${repo.full_name.toLowerCase()}/total.svg`} alt="Download"/>
                </div>
            </div>
        </div>
    )
}

export default RepoItem
