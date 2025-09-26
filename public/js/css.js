// CampanhasScreen.js - Tela inicial moderna e agradável para campanhas de saúde em React Native (Expo)
import React from 'react';
import { View, Text, Image, TouchableOpacity, StyleSheet, ScrollView, StatusBar } from 'react-native';
import { MaterialCommunityIcons, Feather } from '@expo/vector-icons';

// Componente reutilizável para exibir informações da campanha
const CampanhaCard = ({ campanha, onPress }) => (
  <View style={styles.campanhaCard}>
    <View style={styles.bannerContainer}>
      <Image source={{ uri: campanha.imagem }} style={styles.banner} />
      <View style={styles.statusBadge}>
        <MaterialCommunityIcons name="checkbox-marked-circle" size={18} color="#34d399" />
        <Text style={styles.statusText}>{campanha.status}</Text>
      </View>
    </View>
    <Text style={styles.nomeCampanha}>{campanha.nome}</Text>
    <Text style={styles.descricao}>{campanha.descricao}</Text>
    <View style={styles.infoRow}>
      <Feather name="calendar" size={16} color="#7c3aed" style={{ marginRight: 4 }} />
      <Text style={styles.infoLabel}>Período:</Text>
      <Text style={styles.infoText}>{campanha.periodo}</Text>
    </View>
    <View style={styles.infoRow}>
      <Feather name="users" size={16} color="#7c3aed" style={{ marginRight: 4 }} />
      <Text style={styles.infoLabel}>Público-alvo:</Text>
      <Text style={styles.infoText}>{campanha.publico}</Text>
    </View>
    <TouchableOpacity style={styles.botaoSaibaMais} onPress={onPress}>
      <Text style={styles.botaoTexto}>Saiba Mais</Text>
    </TouchableOpacity>
  </View>
);

export default function CampanhasScreen() {
  // Dados fictícios (substitua por dados de API futuramente)
  const campanha = {
    nome: 'Março Lilás',
    descricao: 'Prevenção do Câncer do Colo do Útero. Participe das ações e cuide da sua saúde!',
    periodo: '01/03/2025 a 31/03/2025',
    publico: 'Mulheres de 25 a 64 anos',
    status: 'Ativa',
    imagem: 'https://images.unsplash.com/photo-1511174511562-5f97f4f4e0c8?auto=format&fit=crop&w=800&q=80'
  };

  return (
    <ScrollView style={styles.container}>
      <StatusBar backgroundColor="#f6f7fb" barStyle="dark-content" />
      {/* Cabeçalho */}
      <View style={styles.header}>
        <MaterialCommunityIcons name="heart-pulse" size={32} color="#7c3aed" style={{ marginBottom: 8 }} />
        <Text style={styles.titulo}>Campanhas de Saúde</Text>
        <Text style={styles.subtitulo}>Ações em andamento na sua cidade</Text>
      </View>

      {/* Área de destaque da campanha */}
      <CampanhaCard campanha={campanha} onPress={() => { /* Navegar para detalhes */ }} />
    </ScrollView>
  );
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
    backgroundColor: '#f6f7fb',
  },
  header: {
    paddingTop: 48,
    paddingBottom: 20,
    backgroundColor: '#fff',
    alignItems: 'center',
    borderBottomLeftRadius: 28,
    borderBottomRightRadius: 28,
    marginBottom: 18,
    elevation: 2,
    shadowColor: '#7c3aed',
    shadowOpacity: 0.06,
    shadowRadius: 8,
    shadowOffset: { width: 0, height: 2 }
  },
  titulo: {
    fontSize: 26,
    fontWeight: 'bold',
    color: '#7c3aed',
    marginBottom: 4,
    fontFamily: 'System'
  },
  subtitulo: {
    fontSize: 16,
    color: '#4b5563',
    fontFamily: 'System'
  },
  campanhaCard: {
    backgroundColor: '#fff',
    marginHorizontal: 18,
    borderRadius: 22,
    padding: 22,
    alignItems: 'center',
    elevation: 2,
    shadowColor: '#7c3aed',
    shadowOpacity: 0.08,
    shadowRadius: 8,
    shadowOffset: { width: 0, height: 2 },
    marginBottom: 32,
  },
  bannerContainer: {
    width: '100%',
    position: 'relative',
    marginBottom: 16,
  },
  banner: {
    width: '100%',
    height: 160,
    borderRadius: 16,
  },
  statusBadge: {
    position: 'absolute',
    top: 12,
    left: 12,
    backgroundColor: '#e0f2fe',
    flexDirection: 'row',
    alignItems: 'center',
    paddingHorizontal: 10,
    paddingVertical: 4,
    borderRadius: 12,
    zIndex: 2,
  },
  statusText: {
    color: '#059669',
    fontWeight: 'bold',
    fontSize: 14,
    marginLeft: 4,
  },
  nomeCampanha: {
    fontSize: 22,
    fontWeight: 'bold',
    color: '#7c3aed',
    marginTop: 8,
    marginBottom: 4,
    textAlign: 'center',
    fontFamily: 'System'
  },
  descricao: {
    fontSize: 16,
    color: '#374151',
    textAlign: 'center',
    marginBottom: 14,
    fontFamily: 'System'
  },
  infoRow: {
    flexDirection: 'row',
    alignItems: 'center',
    marginBottom: 2,
  },
  infoLabel: {
    fontWeight: 'bold',
    color: '#059669',
    marginRight: 2,
    fontSize: 15,
    fontFamily: 'System'
  },
  infoText: {
    color: '#374151',
    fontSize: 15,
    fontFamily: 'System'
  },
  botaoSaibaMais: {
    marginTop: 20,
    backgroundColor: '#7c3aed',
    paddingVertical: 13,
    paddingHorizontal: 38,
    borderRadius: 28,
    alignItems: 'center',
    elevation: 1,
    shadowColor: '#7c3aed',
    shadowOpacity: 0.08,
    shadowRadius: 4,
    shadowOffset: { width: 0, height: 2 }
  },
  botaoTexto: {
    color: '#fff',
    fontWeight: 'bold',
    fontSize: 17,
    letterSpacing: 1,
    fontFamily: 'System'
  },
});