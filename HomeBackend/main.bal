import ballerina/io;
import ballerina/http;

service /property on new http:Listener(8080) {

    resource function post .(http:Caller caller, http:Request req) returns error? {
        // Extract data from the request
        json|error payloadResult = req.getJsonPayload();
        
        if (payloadResult is json) {
            json payload = payloadResult;

            // Safely extract fields from the JSON payload with error handling
            json|error cityResult = payload.city;
            json|error propertyTypeResult = payload.propertyType;
            json|error rentOrSaleResult = payload.rentOrSale;

            if (cityResult is json && propertyTypeResult is json && rentOrSaleResult is json) {
                // Convert JSON to string if no error occurred
                string city = cityResult.toString();
                string propertyType = propertyTypeResult.toString();
                string rentOrSale = rentOrSaleResult.toString();

                // Log the received data
                io:println("City: " + city);
                io:println("Property Type: " + propertyType);
                io:println("Rent/Sale: " + rentOrSale);

                // Send a response back to the client
                check caller->respond("Property search request received.");
            } else {
                // Handle case when one of the fields is missing or an error occurred
                io:println("Error: One or more fields are missing or invalid in the payload.");
                check caller->respond("Error: Invalid request payload.");
            }
        } else {
            // If an error occurred while extracting the JSON payload
            io:println("Error in extracting JSON payload: " + payloadResult.message());
            check caller->respond("Invalid request payload.");
        }
    }
}
