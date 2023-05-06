FROM node:16.14-alpine

WORKDIR /app-frontend

COPY package* ./

RUN npm install react-scripts --save \
  && npm install

COPY . .

RUN mkdir -p /app-frontend/node_modules/.cache && \
    chown -R node:node /app-frontend/node_modules/.cache

USER node

CMD ["npm", "start"]
