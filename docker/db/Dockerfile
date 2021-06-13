FROM mysql:5.7

EXPOSE 3306

RUN mkdir -p /var/app
WORKDIR /var/app

RUN apt-get update && apt-get install -y wget git build-essential

# install go
RUN wget https://dl.google.com/go/go1.14.2.linux-amd64.tar.gz
RUN tar -C /usr/local -xzf go1.14.2.linux-amd64.tar.gz
ENV GOPATH /root/go
ENV PATH /usr/local/go/bin:$GOPATH/bin:$PATH
RUN mkdir -p "$GOPATH/src" "$GOPATH/bin" && chmod -R 777 "$GOPATH"

# install sql-migrate
RUN go get -v github.com/rubenv/sql-migrate/...

CMD ["mysqld"]
