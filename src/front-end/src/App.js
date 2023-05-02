import { ApolloProvider } from "@apollo/react-hooks";
import { ApolloClient } from "apollo-client";
import { InMemoryCache, HttpLink } from "@apollo/client";
import Posts from "./posts";
const client = new ApolloClient({
  link: new HttpLink({
    uri: "http://localhost:8000/graphql",
  }),
  cache: new InMemoryCache(),
});

function App() {
  return (
    <ApolloProvider client={client}>
      <div>        
        <Posts></Posts>
      </div>
    </ApolloProvider>
  );
}

export default App;
