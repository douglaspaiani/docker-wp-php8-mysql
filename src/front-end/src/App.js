import { ApolloProvider } from "@apollo/react-hooks";
import { ApolloClient } from "apollo-client";
import { InMemoryCache, HttpLink } from "@apollo/client";
import './styles/global.css'
import Header from "./components/Header";
import Home from "./pages/home ";

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
        <Header />
       <Home />
      </div>
    </ApolloProvider>
  );
}

export default App;
