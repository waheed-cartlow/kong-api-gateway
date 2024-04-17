prometheus() {

    docker kill kong-quickstart-prometheus
    docker rm   kong-quickstart-prometheus

    docker run -d --name kong-quickstart-prometheus -p 9090:9090 -v $(pwd)/prometheus.yml:/etc/prometheus/prometheus.yml prom/prometheus:latest
}

grafana() {

    docker kill grafana
    docker rm   grafana
    docker run --rm --name grafana --publish 3000:3000 --detach grafana/grafana-oss:latest  
}