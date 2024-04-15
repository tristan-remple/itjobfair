// in order for the maps to work, i would have to register a billing account with google
// no other scripts are needed, so this file is not being used

let map

async function mapPier21() {

    const map21div = document.getElementById("map21")
    console.log(map21div)

    if (map21div) {

        const position = { lat: 44.638, lng: 63.565 }

        const { Map } = await google.maps.importLibrary("maps")
        const { AdvancedMarkerElement } = await google.maps.importLibrary("marker")
    
        map = new Map(map21div, {
            zoom: 4,
            center: position,
            mapId: "Address",
        })
    
        const marker = new AdvancedMarkerElement({
            map: map,
            position: position,
            title: "Pier 21",
        })
    }
    
}

// mapPier21()

async function mapCampus() {

    const mapIT = document.getElementById("mapIT")

    if (mapIT) {

        const position = { lat: 44.669, lng: 63.613 }

        const { Map } = await google.maps.importLibrary("maps")
        const { AdvancedMarkerElement } = await google.maps.importLibrary("marker")
    
        map = new Map(mapIT, {
            zoom: 4,
            center: position,
            mapId: "Address",
        })
    
        const marker = new AdvancedMarkerElement({
            map: map,
            position: position,
            title: "NSCC IT Campus",
        })
    }
    
}

// mapCampus()