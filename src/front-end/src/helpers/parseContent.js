import parse from 'html-react-parser';

const parseContent = (content) => {
    return parse(content);
}
  
export default parseContent;