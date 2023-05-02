import React, { useState, useEffect } from 'react';
import fetchPosts from './fetchPosts';

const Posts = () => {
  const [posts, setPosts] = useState([]);
  const [isLoading, setIsLoading] = useState(true);
  const [hasError, setHasError] = useState(false);

  useEffect(() => {
    fetchPosts()
      .then(data => {
        setPosts(data);
        setIsLoading(false);
      })
      .catch(err => {
        console.log(err);
        setHasError(true);
        setIsLoading(false);
      });
  }, []);

  if (isLoading) {
    return <p>Carregando...</p>;
  }

  if (hasError) {
    return <p>Ocorreu um erro ao carregar os posts...</p>;
  }

  return (
    <div>
      <h1>Posts</h1>
      {posts.map(post => (
        <div key={post.id}>
          <h2>{post.titulo}</h2>
          <div>{post.content}</div>
        </div>
      ))}
    </div>
  );
};

export default Posts;
