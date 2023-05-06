import axios from 'axios';
import parseContent from '../helpers/parseContent';

const fetchPosts = () => {
  return axios.get('http://localhost/wp-json/api/post/')
    .then(res => {
      const data = res.data.map(post => ({
        ...post,
        content: parseContent(post.conteudo),
      }));
      return data;
    });
};

export default fetchPosts;
