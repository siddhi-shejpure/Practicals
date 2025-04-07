from collections import deque

def bfs(graph, start_node):
    visited = set()  
    queue = deque([start_node])  

    while queue:
        node = queue.popleft() 
        
        if node not in visited:
            print(node, end=" ")  
            visited.add(node)  
            
            
            for neighbor in graph[node]:
                if neighbor not in visited:
                    queue.append(neighbor)

graph = {
    'A': ['B', 'C'],
    'B': ['A', 'D', 'E'],
    'C': ['A', 'F', 'G'],
    'D': ['B'],
    'E': ['B', 'H'],
    'F': ['C'],
    'G': ['C'],
    'H': ['E']
}

print("BFS Traversal starting from A:")
bfs(graph, 'A')
