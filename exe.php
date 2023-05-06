<?php

  $query = '{
    posts {
        edges {
            node {
                id
                title
                content
            }
        }
    }
  }';

  $data = do_graphql_request($query);

  ?>